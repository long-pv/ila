jQuery(function ($) {
    let dropdownData;
    let jsonData;
    const customMapStyle = [
        {
            "elementType": "geometry",
            "stylers": [
                {
                    "saturation": -40
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "administrative.land_parcel",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "visibility": "on"
                }
            ]
        },
        {
            "featureType": "administrative.land_parcel",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "poi",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road",
            "elementType": "labels.icon",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "labels",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        },
        {
            "featureType": "transit",
            "stylers": [
                {
                    "visibility": "off"
                }
            ]
        }
    ]
    $(() => {
        $.getJSON('/wp-content/themes/fptheme/assets/js/mapService/center.json', function (data) {
            jsonData = data.centerList;
            loadCityDropDown(jsonData);
            //google.maps.event.addDomListener(window, 'load', loadMap(-1, -1));
            var urlParams = new URLSearchParams(window.location.search);
            var city = urlParams.get('city');
            var district = urlParams.get('district');
            var center = urlParams.get('center');
            if (city) {
                const listCityId = [60, 30, 43, 15, 72, 61, 39, 65, 68, 14, 79, 92];
                if (listCityId.includes(Number(city))) {
                    $(".location-area").attr("id", city);
                    $('html, body').scrollTop($('#' + city).offset().top);
                    $('select#selectCity option').each(function () {
                        var optionCity = $(this).val();
                        if (optionCity == city) {
                            $(this).prop('selected', true);
                            loadMap(city, district);
                            loadDistrictsDropdownByID(city);
                        }
                    });
                    $('select#selectDistrict option').each(function () {
                        var optionDistrict = $(this).val();
                        if (optionDistrict == district) {
                            $(this).prop('selected', true);
                            loadDetailMapbyID(city, district)
                        }
                    });
                    $('#centerItem .location-item').each(function(e){
                        if($(this).attr('data-name') == center) {
                            $(this).addClass('active');
                            loadDetailCenterNoClick(city, $(this).attr('data-latlng'), $(e.currentTarget), e);
                        }
                    })
                } else {
                    if ($('body').hasClass('vi')) {
                        window.location.href = '/404-page/';
                    } else {
                        window.location.href = '/en/404-page/';
                    }
                }
            }
        })
            .fail(function (error) {
                console.error('Error:', error);
            });;

        $("#selectCity").on("change", () => {
            loadDistrictsDropdown();
        })
        $("#selectDistrict").on("change", () => {
            loadDetailMap();
        })

        $(".location-area").on("click", "[name='centerDetailItem']", (e) => {
            //debugger;
            const cityId = $(e.currentTarget).attr("data-cityid");
            const latlng = $(e.currentTarget).attr("data-latlng");
            loadDetailCenter(cityId, latlng, $(e.currentTarget), e);
        });
    })
    const uniqueArr = (arr, property) => arr.reduce((acc, curr) => {
        const found = acc.find(item => item[property] === curr[property]);
        if (!found) {
            acc.push(curr);
        }
        return acc;
    }, []);

    const groupData = function (arr) {
        return Object.values(arr.reduce((acc, obj) => {
            const key = obj.cityID;
            if (!acc[key]) {
                acc[key] = {
                    cityName: obj.cityName,
                    cityID: obj.cityID,
                    order: obj.order,
                    districts: []
                };
            }
            acc[key].districts.push({
                districtName: obj.districtName,
                districtID: obj.districtID,
                centerName: obj.centerName,
                centerCode: obj.centerCode,
                address: obj.address,
                hotline: obj.hotline,
                latlng: obj.latlng
            });
            return acc;
        }, {})).sort((a, b) => (a.order > b.order) ? 1 : -1);
    };

    function loadMap(_cityID, _districtID) {
        let lst_map = jsonData;
        let _myLatlng = "16.05952463598433, 102.20934087721359";
        let _zoom = 6

        if (_cityID > 0) {
            lst_map = jsonData.filter(x => x.cityID == _cityID);
            _myLatlng = lst_map[0].c_latlng_default;
            _zoom = lst_map[0].c_zoom;
        }
        if (_districtID > 0) {
            lst_map = jsonData.filter(x => x.districtID == _districtID && x.cityID == _cityID);
            _myLatlng = lst_map[0].d_latlng_default;
            _zoom = lst_map[0].d_zoom;
        }

        const mapCanvas = document.getElementById('contact-map');
        const _latLong = _myLatlng.split(",");
        const myLatlng = new google.maps.LatLng(_latLong[0], _latLong[1]);

        const mapOptions = {
            center: myLatlng,
            zoom: _zoom,
            gestureHandling: "cooperative",
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: customMapStyle
        }
        const map = new google.maps.Map(mapCanvas, mapOptions);
        const image = '/wp-content/themes/fptheme/assets/js/mapService/place_map.png';

        for (let i = 0; i < lst_map.length; i++) {
            const vcenterName = lst_map[i].centerName;
            const vAddress = lst_map[i].address;
            const vLatLng = lst_map[i].latlng;
            const vHotline = lst_map[i].hotline;

            const latLong = vLatLng.split(",");
            const myLatLng1 = new google.maps.LatLng(latLong[0], latLong[1]);
            contentNewStore = "<div id='infoContent'>";
            contentNewStore += "<div class='info'>";
            contentNewStore += "<div><b>" + vcenterName + "</div>";
            contentNewStore += "<div><b>Hotline:" + vHotline + " <b/></div>";
            contentNewStore += "<div><b>Address:" + vAddress + "</b></div>";
            contentNewStore += "</div>";
            contentNewStore += "</div>";
            const infoWindow = new google.maps.InfoWindow();
            const marker = new google.maps.Marker({
                position: myLatLng1,
                map: map,
                icon: image,
                html: contentNewStore,
                draggable: false,
                animation: google.maps.Animation.DROP
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
            google.maps.event.addListener(marker, 'mouseover', function () {
                infoWindow.setContent(this.html);
                infoWindow.open(map, this);
            });

            google.maps.event.addListener(marker, 'mouseout', function () {
                infoWindow.close();
            });

        }
    }

    function loadCityDropDown(data) {
        dropdownData = groupData(data);
        $("#selectCity").empty();
        if ($('body.vi').length != 0) {
            $("#selectCity").append(/* html */`<option value="-1">Toàn quốc</option>`);
        } else {
            $("#selectCity").append(/* html */`<option value="-1">Nationwide</option>`);
        }
        $("#centerItem").empty();

        for (let i = 0; i < dropdownData.length; i++) {
            const city = dropdownData[i];
            $("#selectCity").append(/* html */`<option value="${city.cityID}">${city.cityName}</option>`);
            for (let i = 0; i < city.districts.length; i++) {
                const district = city.districts[i];
                $("#centerItem").append(/* html */`
                <div class="location-item" data-cityid="${city.cityID}" data-latlng="${district.latlng}" data-name="${district.centerCode}" name="centerDetailItem">
                    <div class="location-heading">
                        <div class="box-icon">
                            <i class="fa-light fa-building"></i>
                        </div>
                        <h3 class="location-name">${district.centerName}</h3>
                    </div>
                    <div class="location-address">
                        <i class="fa-light fa-location-dot"></i>
                        <p>${district.address}</p>
                    </div>
                    <a href="tel:${district.hotline}" class="btn-contact">
                        <i class="fa-solid fa-phone"></i> ${district.hotline}
                    </a>
                </div>
            `);
            }
        }
    }

    function loadDistrictsDropdown() {
        const cityID = $("#selectCity").val();
        if (cityID != null && cityID.length > 0)
            loadMap(cityID, -1);

        $("#selectDistrict").empty();
        $("#centerItem").empty();
        $("#selectDistrict").append(/* html */`<option value="-1">Chọn quận/huyện</option>`);
        if (cityID != -1) {
            const filteredData = dropdownData.find(d => d.cityID == cityID);
            $("#selectDistrict").attr("data-cityid", cityID);
            filteredData.districts.forEach(item => {
                $("#centerItem").append(/* html */`
            <div class="location-item" data-cityid="${filteredData.cityID}" data-latlng="${item.latlng}" data-name="${item.centerCode}" name="centerDetailItem">
                <div class="location-heading">
                    <div class="box-icon">
                        <i class="fa-light fa-building"></i>
                    </div>
                    <h3 class="location-name">${item.centerName}</h3>
                </div>
                <div class="location-address">
                    <i class="fa-light fa-location-dot"></i>
                    <p>${item.address}</p>
                </div>
                <a href="tel:${item.hotline}" class="btn-contact">
                    <i class="fa-solid fa-phone"></i> ${item.hotline}
                </a>
            </div>
        `);
            })

            const uniqueDistrict = uniqueArr(filteredData.districts, "districtID");
            for (let i = 0; i < uniqueDistrict.length; i++) {
                const district = uniqueDistrict[i];
                $("#selectDistrict").append(/* html */`<option value="${district.districtID}">${district.districtName}</option>`);
            }

        } else {
            for (let i = 0; i < dropdownData.length; i++) {
                const city = dropdownData[i];
                for (let i = 0; i < city.districts.length; i++) {
                    const district = city.districts[i];
                    $("#centerItem").append(/* html */`
                    <div class="location-item" data-cityid="${city.cityID}" data-latlng="${district.latlng}" name="centerDetailItem">
                        <div class="location-heading">
                            <div class="box-icon">
                                <i class="fa-light fa-building"></i>
                            </div>
                            <h3 class="location-name">${district.centerName}</h3>
                        </div>
                        <div class="location-address">
                            <i class="fa-light fa-location-dot"></i>
                            <p>${district.address}</p>
                        </div>
                        <a href="tel:${district.hotline}" class="btn-contact">
                            <i class="fa-solid fa-phone"></i> ${district.hotline}
                        </a>
                    </div>
                `);
                }
            }
        }
    }

    function loadDistrictsDropdownByID(cityID) {
        // const cityID = $("#selectCity").val();
        if (cityID != null && cityID.length > 0)
            loadMap(cityID, -1);

        $("#selectDistrict").empty();
        $("#centerItem").empty();
        $("#selectDistrict").append(/* html */`<option value="-1">Chọn quận/huyện</option>`);
        if (cityID != -1) {
            const filteredData = dropdownData.find(d => d.cityID == cityID);
            $("#selectDistrict").attr("data-cityid", cityID);
            filteredData.districts.forEach(item => {
                $("#centerItem").append(/* html */`
            <div class="location-item" data-cityid="${filteredData.cityID}" data-latlng="${item.latlng}" data-name="${item.centerCode}" name="centerDetailItem">
                <div class="location-heading">
                    <div class="box-icon">
                        <i class="fa-light fa-building"></i>
                    </div>
                    <h3 class="location-name">${item.centerName}</h3>
                </div>
                <div class="location-address">
                    <i class="fa-light fa-location-dot"></i>
                    <p>${item.address}</p>
                </div>
                <a href="tel:${item.hotline}" class="btn-contact">
                    <i class="fa-solid fa-phone"></i> ${item.hotline}
                </a>
            </div>
        `);
            })

            const uniqueDistrict = uniqueArr(filteredData.districts, "districtID");
            for (let i = 0; i < uniqueDistrict.length; i++) {
                const district = uniqueDistrict[i];
                $("#selectDistrict").append(/* html */`<option value="${district.districtID}">${district.districtName}</option>`);
            }

        } else {
            for (let i = 0; i < dropdownData.length; i++) {
                const city = dropdownData[i];
                for (let i = 0; i < city.districts.length; i++) {
                    const district = city.districts[i];
                    $("#centerItem").append(/* html */`
                    <div class="location-item" data-cityid="${city.cityID}" data-latlng="${district.latlng}" data-name="${district.centerCode}" name="centerDetailItem">
                        <div class="location-heading">
                            <div class="box-icon">
                                <i class="fa-light fa-building"></i>
                            </div>
                            <h3 class="location-name">${district.centerName}</h3>
                        </div>
                        <div class="location-address">
                            <i class="fa-light fa-location-dot"></i>
                            <p>${district.address}</p>
                        </div>
                        <a href="tel:${district.hotline}" class="btn-contact">
                            <i class="fa-solid fa-phone"></i> ${district.hotline}
                        </a>
                    </div>
                `);
                }
            }
        }
    }

    function loadDetailMap() {
        const cityID = $("#selectDistrict").attr("data-cityid");
        const districtId = $("#selectDistrict").val();

        if (cityID != null && cityID.length > 0 && districtId != null && districtId.length)
            loadMap(cityID, districtId);

        const districts = dropdownData.find(d => d.cityID == cityID).districts.filter(d => (districtId != -1 && d.districtID == districtId) || districtId == -1);
        $("#centerItem").empty();

        for (let i = 0; i < districts.length; i++) {
            const district = districts[i];
            $("#centerItem").append(/* html */`
             <div class="location-item" data-cityid="${cityID}" data-districtid="${districtId}" data-name="${district.centerCode}" data-latlng="${district.latlng}" name="centerDetailItem">
                <div class="location-heading">
                    <div class="box-icon">
                        <i class="fa-light fa-building"></i>
                    </div>
                    <h3 class="location-name">${district.centerName}</h3>
                </div>
                <div class="location-address">
                    <i class="fa-light fa-location-dot"></i>
                    <p>${district.address}</p>
                </div>
                <a href="tel:${district.hotline}" class="btn-contact">
                    <i class="fa-solid fa-phone"></i> ${district.hotline}
                </a>
            </div>
        `);
        }
    }
    function loadDetailMapbyID(cityID, districtId) {
        //const cityID = $("#selectDistrict").attr("data-cityid");
        //const districtId = $("#selectDistrict").val();

        if (cityID != null && cityID.length > 0 && districtId != null && districtId.length)
            loadMap(cityID, districtId);

        const districts = dropdownData.find(d => d.cityID == cityID).districts.filter(d => (districtId != -1 && d.districtID == districtId) || districtId == -1);
        $("#centerItem").empty();

        for (let i = 0; i < districts.length; i++) {
            const district = districts[i];
            $("#centerItem").append(/* html */`
             <div class="location-item" data-cityid="${cityID}" data-districtid="${districtId}" data-name="${district.centerCode}" data-latlng="${district.latlng}" name="centerDetailItem">
                <div class="location-heading">
                    <div class="box-icon">
                        <i class="fa-light fa-building"></i>
                    </div>
                    <h3 class="location-name">${district.centerName}</h3>
                </div>
                <div class="location-address">
                    <i class="fa-light fa-location-dot"></i>
                    <p>${district.address}</p>
                </div>
                <a href="tel:${district.hotline}" class="btn-contact">
                    <i class="fa-solid fa-phone"></i> ${district.hotline}
                </a>
            </div>
        `);
        }
    }

    function loadDetailCenter(cityId, latlng, elem, event) {
        if (event.target.nodeName === "A") {
            return;
        }
        console.log($(elem));
        if ($(elem).hasClass("active")) {
            const currentCity = $("#selectCity").val();
            const currentDistrict = $("#selectDistrict").val();

            loadMap(currentCity, currentDistrict);

            $(".location-item").removeClass("active");
            return;
        }
        $(".location-item").removeClass("active");
        const center = dropdownData.find(d => d.cityID == cityId).districts.find(d => d.latlng === latlng);
        if (center == null) return;
        $(elem).addClass("active");

        const mapCanvas = document.getElementById('contact-map');
        const _latLong = center.latlng.split(",");
        const myLatlng = new google.maps.LatLng(_latLong[0], _latLong[1]);
        const mapOptions = {
            center: myLatlng,
            zoom: 15,
            gestureHandling: "cooperative",
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: customMapStyle
        }
        const map = new google.maps.Map(mapCanvas, mapOptions);
        const image = '/wp-content/themes/fptheme/assets/js/mapService/place_map.png';

        const vcenterName = center.centerName;
        const vAddress = center.address;
        const vHotline = center.hotline;

        const myLatLng1 = new google.maps.LatLng(_latLong[0], _latLong[1]);
        contentNewStore = "<div id='infoContent'>";
        contentNewStore += "<div class='info'>";
        contentNewStore += "<div><b>" + vcenterName + "</div>";
        contentNewStore += "<div><b>Hotline:" + vHotline + " <b/></div>";
        contentNewStore += "<div><b>Address:" + vAddress + "</b></div>";
        contentNewStore += "</div>";
        contentNewStore += "</div>";
        const infoWindow = new google.maps.InfoWindow();
        const marker = new google.maps.Marker({
            position: myLatLng1,
            map: map,
            icon: image,
            html: contentNewStore,
            draggable: false,
            animation: google.maps.Animation.DROP
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
        google.maps.event.addListener(marker, 'mouseover', function () {
            infoWindow.setContent(this.html);
            infoWindow.open(map, this);
        });

        google.maps.event.addListener(marker, 'mouseout', function () {
            infoWindow.close();
        });
    }
    function loadDetailCenterNoClick(cityId, latlng, elem) {
        if ($(elem).hasClass("active")) {
            const currentCity = $("#selectCity").val();
            const currentDistrict = $("#selectDistrict").val();

            loadMap(currentCity, currentDistrict);

            $(".location-item").removeClass("active");
            return;
        }
        //$(".location-item").removeClass("active");
        const center = dropdownData.find(d => d.cityID == cityId).districts.find(d => d.latlng === latlng);
        if (center == null) return;
        $(elem).addClass("active");

        const mapCanvas = document.getElementById('contact-map');
        const _latLong = center.latlng.split(",");
        const myLatlng = new google.maps.LatLng(_latLong[0], _latLong[1]);
        const mapOptions = {
            center: myLatlng,
            zoom: 15,
            gestureHandling: "cooperative",
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: customMapStyle
        }
        const map = new google.maps.Map(mapCanvas, mapOptions);
        const image = '/wp-content/themes/fptheme/assets/js/mapService/place_map.png';

        const vcenterName = center.centerName;
        const vAddress = center.address;
        const vHotline = center.hotline;

        const myLatLng1 = new google.maps.LatLng(_latLong[0], _latLong[1]);
        contentNewStore = "<div id='infoContent'>";
        contentNewStore += "<div class='info'>";
        contentNewStore += "<div><b>" + vcenterName + "</div>";
        contentNewStore += "<div><b>Hotline:" + vHotline + " <b/></div>";
        contentNewStore += "<div><b>Address:" + vAddress + "</b></div>";
        contentNewStore += "</div>";
        contentNewStore += "</div>";
        const infoWindow = new google.maps.InfoWindow();
        const marker = new google.maps.Marker({
            position: myLatLng1,
            map: map,
            icon: image,
            html: contentNewStore,
            draggable: false,
            animation: google.maps.Animation.DROP
        });
        google.maps.event.addListener(marker, 'click', toggleBounce);
        google.maps.event.addListener(marker, 'mouseover', function () {
            infoWindow.setContent(this.html);
            infoWindow.open(map, this);
        });

        google.maps.event.addListener(marker, 'mouseout', function () {
            infoWindow.close();
        });
    }
    function toggleBounce() {

        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
})