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
            let startDate=data[0].start_year
            let finishDate=data[0].finish_year
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
}

function handleFileSelect(evt) {
    $('#here').empty();
    let file = evt.target.files;
    for (let i = 0, f; f = file[i]; i++) {
        let reader = new FileReader();
        reader.onload = (function (theFile) {
            return function (e) {
                var div = document.createElement('div');
                if (i===0){div.setAttribute('class','carousel-item active')}
                else{div.setAttribute('class','carousel-item')}
                div.innerHTML = ['<img class="img-fluid" src="', e.target.result, '" alt="...">'].join('');
                document.getElementById('here').insertBefore(div, null);
            };
        })(f);
        reader.readAsDataURL(f);
        document.getElementById('carousel_img').removeAttribute('hidden');
    }
}
document.getElementById('images').addEventListener('change', handleFileSelect, false);

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
