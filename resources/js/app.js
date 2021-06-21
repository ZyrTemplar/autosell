require('./bootstrap');
$('.carousel').carousel()
$('.carousel_img').carousel()


$(document).ready(function() {
    $.ajax({
        url: 'http://127.0.0.1:8000/ajax/getAllCars',
        dataType: 'json',
        success: function (data) {
            let temp=data[0].brand;
            for (let i = 0; i <data.length; i++) {
                if (data[i].brand===temp) continue;
                let item = '<option value="' + data[i].brand+'">'+data[i].brand+'</option>';
                $('#brand').append(item)
                temp=data[i].brand;
            }
        },
        error:function (data) {
            console.log(data)
        }
    })
});

window.loadPhoto=function(){
    document.getElementById('images').click();
}

window.getModel=function(){
    $('#year_from').find('option').remove();
    $('#year_to').find('option').remove();
    $('#model').find('option').remove();
    let brand=$('#brand').val();
    if (brand=='all'){
        let item = '<option value="all">Всі</option>';
        $('#model').append(item)
        $('#year_from').append(item)
        $('#year_to').append(item)
    }
    $.ajax({
        url: 'http://127.0.0.1:8000/ajax/getAllCars',
        dataType: 'json',
        success: function (data) {
            for (let i = 0; i <data.length; i++) {
                if (data[i].brand===brand){
                    let item = '<option value="' + data[i].model+'">'+data[i].model+'</option>';
                    $('#model').append(item)
                }
            }
            let model=$('#model').val();
            let startDate=0;
            let finishDate=0;
            for (let i = 0; i <data.length; i++) {
                if (data[i].model===model){
                    startDate=data[i].start_year;
                    finishDate=data[i].finish_year;
                }
            }
            if (finishDate==='-') finishDate=2021
            for (let i=startDate;i<=finishDate;i++){
                let item = '<option value="' + i+'">'+i+'</option>';
                $('#year_from').append(item)
                $('#year_to').append(item)
            }
        }
    })
}

window.getYear=function(){
    $('#year_from').find('option').remove();
    $('#year_to').find('option').remove();
    let model=$('#model').val();
    console.log(model);
    let startDate=0;
    let finishDate=0;
    $.ajax({
        url: 'http://127.0.0.1:8000/ajax/getAllCars',
        dataType: 'json',
        success: function (data) {
            for (let i = 0; i <data.length; i++) {
                if (data[i].model===model){
                    startDate=data[i].start_year
                    finishDate=data[i].finish_year
                }
            }
            if (finishDate==='-') finishDate=2021
            for (let i=startDate;i<=finishDate;i++){
                let item = '<option value="' + i+'">'+i+'</option>';
                $('#year_from').append(item)
                $('#year_to').append(item)
            }
        }
    })
}

window.change_menu =function (id) {
    $('.menu-li').removeClass('active-custom')
    $('#'+id).addClass('active-custom')
    if (id==='change'){
        $('.configs').html('<div class="changer">' +
            '<form action="/change" method="POST" class=" h-100 text-center pl-5 col">\n'+
            '<input type="hidden" id="csrf" name="_token" value= "<?php{{ csrf_token() }}>" />'+
            '<h1 class="mb-5">Змініть потрібні дані</h1>'+
            '<div class="form-group text-center w-75 mx-auto">\n' +
            '<h2><label for="name">Ваше ім\'я</label></h2>'+
            '<input type="text" class="form-control" id="name" name="name">\n' +
            '</div>' +
            '<div class="form-group text-center w-75 mx-auto">\n' +
            '<h2><label for="email">Ваш Email</label></h2>\n' +
            '<input type="email" class="form-control " id="email" name="email">\n' +
            '</div>'+
            '<div class="form-group text-center w-75 mx-auto">\n' +
            '<h2><label for="number">Ваш мобільний номер</label></h2>\n' +
            '<input type="text" class="form-control " id="number" name="number">\n' +
            '</div>'+
            '<button type="submit" class="btn btn-primary mt-3">Змінити дані</button>'+
            '</form>'+
            '</div>')
        $.ajax({
            url: "/ajax/getUser",
            method: 'GET',
            data:  { 'answered': '1' },
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                $('#name').val(data[0].name);
                $('#email').val(data[0].email);
                $('#number').val(data[0].number);
                $('#csrf').val(data[1]);
            },
            error: function() {
                console.log('error')
            }
        })
    }

    if (id==='my_auto'){
        $('.configs').html('<div id="interest-tab" class="row"><div class="col">\n' +
            '                <div id="pills-tabContent" class="tab-content" style="min-height: 413px;">\n' +
            '                    <div id="all" role="tabpanel" aria-labelledby="all-tab" class="tab-pane fade show active">\n' +
            '                        <div id="all-cars-list" class="row p-3">\n' +
                    '                    </div>\n' +
                    '                </div>\n' +
                    '            </div>\n' +
                    '        </div>')
        $.ajax({
            url: "/ajax/getMyCars",
            method: 'GET',
            data:  { 'answered': '1' },
            processData: false,
            contentType: false,
            cache: false,
            success: function(data) {
                for (let i=0;i<data.length;i++){
                    let id=data[i].id
                    let photos=[
                        data[i].photo1,
                        data[i].photo2,
                        data[i].photo3,
                        data[i].photo4,
                        data[i].photo5,
                        data[i].photo6,
                        data[i].photo7,
                        data[i].photo8,
                        data[i].photo9,
                        data[i].photo10,
                    ]
                    let model=data[i].model
                    let brand=data[i].brand
                    let fuel=data[i].fuel
                    let year=data[i].year
                    let mileage=data[i].mileage
                    let auto_body=data[i].auto_body
                    let transmission=data[i].transmission
                    let drive_unit=data[i].drive_unit
                    let price=data[i].price
                    for (let j=0;j<10;j++){
                        if (photos[j]==null){
                            photos.splice(j,10-j);
                        }
                    }
                    $('#all-cars-list').append(`<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3 mt-4">
                            <div class="card">
                                <div class="car-preview-img">
                                    <div id="carousel-car-${id}" data-interval="false" data-ride="carousel" class="carousel slide w-100">
                                        <div class="carousel-inner" id="inner-${id}">`)
                    $('#inner-'+id).append(`<div class="carousel-item active">
                                            <img src="storage/${photos[0]}" title="${brand+' '+model}" alt="${brand+' '+model}" class="d-block w-100" style="visibility: visible;">
                                        </div>`)
                    if (photos.length>=0){
                        for (let j=1; j<photos.length;j++) {
                            $('#inner-'+id).append(
                                `<div class="carousel-item">
                                <img src="storage/${photos[j]}" title="${brand+' '+model}" alt="${brand+' '+model}" class="d-block w-100" style="visibility: visible;">
                                </div>`)
                    }
                    }
                    $('#carousel-car-'+id).append(`</div>
                                        <a href="#carousel-car-${id}" role="button" data-slide="prev" class="carousel-control-prev">
                                            <span aria-hidden="true" class="carousel-control-prev-icon"></span>
                                        </a> <a href="#carousel-car-${id}" role="button" data-slide="next" class="carousel-control-next">
                                            <span aria-hidden="true" class="carousel-control-next-icon"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="about__info-cars"></div>
                                <div class="card-body">
                                    <div class="list-card-body">
                                       <a href="auto/${id}">
                                           <table>
                                                <tr class="card-title ">
                                                    <td class="text-decoration-none col-auto pl-0 height-60">${brand+' '+model}</td>
                                                   <td class="carYear col-auto mt-3">${year}</td>
                                                </tr>
                                            </table>
                                        </a>
                                   </div>
                                    <span class="old-car">
                                        <i class="fas old-car-icon"></i>
                                        <span>${mileage} км</span>
                                    </span>
                                    <div class="row car-info">
                                        <div class="col-7 pr-1">
                                            <div class="car-info__specifications">
                                                <i class="param_icons pr-1"><img src="/img/about_car/kuzov_icon.png" alt=""></i>${auto_body}
                                            </div>
                                            <div class="car-info__specifications">
                                               <i class="param_icons"><img src="/img/about_car/geadrsgift_icon.png" alt=""></i>${transmission}
                                            </div>
                                        </div>
                                        <div class="col-5 pr-1 pl-1">
                                            <div class="car-info__specifications">
                                                <i class="param_icons"><img src="/img/about_car/engine_icon.png" alt=""></i>${fuel}
                                            </div>
                                            <div class="car-info__specifications">
                                                <i class="param_icons"><img src="/img/about_car/privod_icon.png" alt=""></i>${drive_unit}
                                            </div>
                                        </div>
                                    </div>
                                    <table>
                                        <tr>
                                            <td> <img class="mr-1" src="/img/valuta/dollar.png" alt=""></td>
                                            <td class="price mt-1">${price}</td>
                                        </tr>
                                    </table>
                                   <a href="auto/${id}" class="btn btn-primary">
                                        Більше
                                    </a>
                                </div>
                            </div>
                          </div>`)
                }
            },
            error: function() {
                console.log('error')
            }
        })
    }
}



$(function() {
    let
        max_file_number = 10,
        $form = $('#new_auto'),
        $file_upload = $('#images', $form),
        $button = $('#submit_auto', $form);

    // Disable submit button on page ready.
    $button.prop('disabled', 'disabled');

    $file_upload.on('change', function () {
        let number_of_images = $(this)[0].files.length;
        if (number_of_images > max_file_number) {
            alert('Завантажити можливо лише ' +max_file_number+ ' фото.');
            $(this).val('');
            $button.prop('disabled', 'disabled');
        } else {
            $button.prop('disabled', false);
        }
    });
});
