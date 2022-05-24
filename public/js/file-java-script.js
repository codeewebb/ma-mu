window.onload = function () {
    'use strict';
    // localStorage.clear();

    let tbody = document.querySelector('#tbody'),

        // increace_amount     = document.querySelector('.increace'),
        li = document.createElement('li'),
        select_type_food = document.querySelectorAll('.select-type-food'),
        salesTableNumber = document.querySelector('.sales-table'),
        ul_types = document.getElementById('ul-types'),
        final_price = document.getElementById('final-price'),
        accepte_reset = document.getElementById('accepte'),
        reject_orders = document.getElementById('reject_orders');



    $(document).on('click', '.increace', function () {

        let parentId = this.parentElement.getAttribute('id');
        $.get('/increace-orders/' + this.parentElement.getAttribute('id'), function (data, status, xhr) {
            if (data.status == true && status == "success") {
                let current = 1;

                final_price.textContent = data.final_price;
                //   if(data.orders > 0){
                //        final_price.textContent = "المبلغ الكلي = " + data.final_price;
                //     }else{
                //        final_price.textContent = "المبلغ الكلي = 0" ;
                //     }

                if (tbody.hasChildNodes()) {
                    while (tbody.hasChildNodes()) {
                        tbody.removeChild(tbody.childNodes[0]);
                    }

                    data.orders.forEach(element => {

                        let tr_table_row = document.createElement('tr'),
                            td_type_name = document.createElement('td'),
                            td_current = document.createElement('td'),
                            td_type_amount = document.createElement('td'),
                            td_type_price = document.createElement('td'),
                            td_final_price = document.createElement('td'),
                            td_type_created_at = document.createElement('td'),
                            td_cancel_order = document.createElement('td'),
                            span_increace = document.createElement('span'),
                            span_dicreace = document.createElement('span');

                        // td_type_name.textContent = element.type_id; //===  set
                        td_type_name.textContent = element.type__fun__relation.type_name; //===  set
                        td_current.textContent = current++; //===  set
                        td_type_amount.textContent = element.type_amount; //===  set
                        td_type_price.textContent = element.type_price; //===  set
                        td_final_price.textContent = td_type_amount.textContent * element.type_price; //===  set
                        td_type_created_at.textContent = element.created_at; //===  set

                        td_cancel_order.textContent = "x";


                        span_increace.textContent = "+";
                        span_dicreace.textContent = "-";

                        span_increace.classList.add('increace');
                        span_dicreace.classList.add('dicreace');


                        td_type_amount.appendChild(span_increace);
                        td_type_amount.appendChild(span_dicreace);
                        td_type_amount.classList.add('type_amount');

                        td_cancel_order.classList.add('cancel_order');
                        td_cancel_order.setAttribute('id', element.id);


                        // td_type_amount.classList.add('increace' ,'dicreace');
                        // td_type_amount.setAttribute('class','increace');
                        td_type_amount.setAttribute('id', element.id);

                        tr_table_row.appendChild(td_current);
                        tr_table_row.appendChild(td_type_name);
                        tr_table_row.appendChild(td_type_amount);
                        tr_table_row.appendChild(td_type_price);
                        tr_table_row.appendChild(td_final_price);
                        tr_table_row.appendChild(td_type_created_at);
                        tr_table_row.appendChild(td_cancel_order);


                        tbody.appendChild(tr_table_row);


                    });

                }
            }

        });

    });



    $(document).on('click', '.dicreace', function () {

        $.get('/dicreace-orders/' + this.parentElement.getAttribute('id'), function (data, status, xhr) {
            if (data.status == true && status == "success") {

                final_price.textContent = data.final_price;
                //   if(data.orders > 0){
                //    final_price.textContent = "المبلغ الكلي = " + data.final_price;
                // }else{
                //    final_price.textContent = "المبلغ الكلي = 0" ;
                // }


                let current = 1;
                if (tbody.hasChildNodes()) {
                    while (tbody.hasChildNodes()) {
                        tbody.removeChild(tbody.childNodes[0]);
                    }

                    data.orders.forEach(element => {

                        let tr_table_row = document.createElement('tr'),

                            td_type_name = document.createElement('td'),
                            td_current = document.createElement('td'),
                            td_type_amount = document.createElement('td'),
                            td_type_price = document.createElement('td'),
                            td_final_price = document.createElement('td'),
                            td_type_created_at = document.createElement('td'),
                            td_cancel_order = document.createElement('td'),
                            span_increace = document.createElement('span'),
                            span_dicreace = document.createElement('span');

                        // td_type_name.textContent = element.type_id; //===  set
                        td_type_name.textContent = element.type__fun__relation.type_name; //===  set
                        td_current.textContent = current++; //===  set
                        td_type_amount.textContent = element.type_amount; //===  set
                        td_type_price.textContent = element.type_price; //===  set
                        td_final_price.textContent = td_type_amount.textContent * element.type_price; //===  set
                        td_type_created_at.textContent = element.created_at; //===  set
                        td_cancel_order.textContent = "x";

                        span_increace.textContent = "+";
                        span_dicreace.textContent = "-";

                        span_increace.classList.add('increace');
                        span_dicreace.classList.add('dicreace');

                        td_cancel_order.classList.add('cancel_order');
                        td_cancel_order.setAttribute('id', element.id);


                        td_type_amount.appendChild(span_increace);
                        td_type_amount.appendChild(span_dicreace);
                        td_type_amount.classList.add('type_amount');
                        // td_type_amount.setAttribute('class','increace');
                        td_type_amount.setAttribute('id', element.id);


                        tr_table_row.appendChild(td_current);
                        tr_table_row.appendChild(td_type_name);
                        tr_table_row.appendChild(td_type_amount);
                        tr_table_row.appendChild(td_type_price);
                        tr_table_row.appendChild(td_final_price);
                        tr_table_row.appendChild(td_type_created_at);
                        tr_table_row.appendChild(td_cancel_order);


                        tbody.appendChild(tr_table_row);


                    });

                }
            }

        });

    });



    $(document).on('click', '.select-type-food', function () {
        var type_id = $(this).attr('type_id'),
            type_name = $(this).attr('type_name'),
            price_sale = $(this).attr('price_sale'),
            _token = this.parentElement.getAttribute('_token'),
            sales_table_number = salesTableNumber.getAttribute('id');

        // console.log("sales_table => ", sales_table_number);

        $.post('/add-to-orders', {
            '_token': _token,
            'type_id': type_id,
            'type_amount': 1,
            'type_price': price_sale,
            'sales_table': sales_table_number,
            'status': 0

        }, function (data, status, xhr) {

            if (data.status == true && status == "success") {

                console.log(data.status);
                final_price.textContent = data.final_price;

                // if(data.orders > 0){
                //    final_price.textContent = "المبلغ الكلي = " + data.final_price;
                // }else{
                //    final_price.textContent = "المبلغ الكلي = 0" ;
                // }


                let current = 1;
                if (tbody.hasChildNodes()) {
                    while (tbody.hasChildNodes()) {
                        tbody.removeChild(tbody.childNodes[0]);
                    }

                    data.orders.forEach(element => {
                        // element.type__fun__relation.forEach(element => {
                        //           console.log("element => " ,    element.type_name);
                        // });
                        // console.log("element => " , element.type__fun__relation.type_name);

                        let tr_table_row = document.createElement('tr'),

                            td_type_name = document.createElement('td'),
                            td_current = document.createElement('td'),
                            td_type_amount = document.createElement('td'),
                            td_type_price = document.createElement('td'),
                            td_final_price = document.createElement('td'),
                            td_type_created_at = document.createElement('td'),
                            td_cancel_order = document.createElement('td'),
                            span_increace = document.createElement('span'),
                            span_dicreace = document.createElement('span');

                        td_type_name.textContent = element.type__fun__relation.type_name; //===  set
                        td_current.textContent = current++; //===  set
                        td_type_amount.textContent = element.type_amount; //===  set
                        td_type_price.textContent = element.type_price; //===  set
                        td_final_price.textContent = td_type_amount.textContent * element.type_price; //===  set
                        td_type_created_at.textContent = element.created_at; //===  set

                        td_cancel_order.textContent = "x";

                        span_increace.textContent = "+";
                        span_dicreace.textContent = "-";

                        span_increace.classList.add('increace');
                        span_dicreace.classList.add('dicreace');

                        td_cancel_order.classList.add('cancel_order');
                        td_cancel_order.setAttribute('id', element.id);


                        td_type_amount.appendChild(span_increace);
                        td_type_amount.appendChild(span_dicreace);

                        td_type_amount.setAttribute('id', element.id);
                        td_type_amount.classList.add('type_amount');

                        // td_type_amount.setAttribute('class','increace');
                        // td_type_amount.classList.add('increace' ,'dicreace');



                        tr_table_row.appendChild(td_current);
                        tr_table_row.appendChild(td_type_name);
                        tr_table_row.appendChild(td_type_amount);
                        tr_table_row.appendChild(td_type_price);
                        tr_table_row.appendChild(td_final_price);
                        tr_table_row.appendChild(td_type_created_at);
                        tr_table_row.appendChild(td_cancel_order);


                        tbody.appendChild(tr_table_row);


                    });

                }


            }

        });

    });


    $(document).on('click', '.get-item', function () {

        // ul_types.style.transform = "translateY(50px)";
        ul_types.style.width = "80%";
        ul_types.style.transition = ".2s ease-in";
        //    ul_types.style.display = "none";
        $.get('/get-item/' + this.getAttribute('id'),
            function (data, status, xhr) {

                if (data.status == true && status == "success") {

                    //    ul_types.style.display = "block";
                    ul_types.style.width = "100%";
                    ul_types.style.transition = ".5s ease-in";
                    //   ul_types.style.transform = "translateY(0px)";



                    //  console.log("status =>  " + data.status);
                    //  console.log("type_id => " + data.category_id);

                    if (ul_types.hasChildNodes()) {
                        //   ul_types.style.transform = "translateY(200px)";
                        while (ul_types.hasChildNodes()) {
                            ul_types.removeChild(ul_types.childNodes[0]);
                        }
                        ul_types.style.transform = "translateY(0px)";

                        data.types.forEach(element => {
                            let li = document.createElement('li');
                            li.innerHTML = '<strong>' + element.type_name + '</strong>' + '<span>' + ' SD /  ' + element.price_sale + '</span>';
                            // li.textContent = element.type_name + element.price_sale;
                            li.setAttribute('class', 'select-type-food');
                            li.setAttribute('type_id', element.id);
                            li.setAttribute('type_name', element.type_name);
                            li.setAttribute('price_sale', element.price_sale);
                            // li.setAttribute('_token','csrf_token()');
                            ul_types.appendChild(li);
                        });

                    } else {
                        data.types.forEach(element => {
                            let li = document.createElement('li');
                            li.innerHTML = '<strong>' + element.type_name + '</strong>' + '<span>' + ' SD -' + element.price_sale + '</span>'
                            // li.textContent = element.type_name + element.price_sale;
                            li.setAttribute('class', 'select-type-food');
                            li.setAttribute('type_id', element.id);
                            li.setAttribute('type_name', element.type_name);
                            li.setAttribute('price_sale', element.price_sale);
                            // li.parentElement.getAttribute('_token');
                            ul_types.appendChild(li);

                        });
                    }
                    // ul_types.style.transform = "translateY(0px)";

                }

            });

    });


    $(document).on('click', '.cancel_order', function () {

        let parentElement = this.parentElement;
        let order_id = this.getAttribute('id');
        function confirm_Function() {
            var message = "هل تريد حذف الطلب ؟؟ !";

            var delete_data = confirm(message);

            if (delete_data == true) {


                $.get('/delete_order/' + order_id,

                    function (data, status) {
                        if (data.status == true && status == "success") {
                            final_price.textContent = data.final_price;
                            parentElement.remove();
                        }

                    });
            } else {
                return false;
            }
        }
        confirm_Function();

    });


    // if (final_price.textContent <= 0) {
    //     accepte_reset.classList.add('done-reset');
    // }


    $(document).on('click', '#reject_orders', function (e) {
        e.preventDefault();
        if (final_price.textContent > 0) {
            let confirmMessage = "هل تريد حذف الطلبات ؟";

            if (confirm(confirmMessage) == true) {
                $.get('/reject_orders/' + salesTableNumber.getAttribute('id'),
                    function (data, status, xhr) {
                        if (data.status == true) {

                            final_price.textContent = 0;
                            if (tbody.hasChildNodes()) {
                                let tbody_tr = document.querySelectorAll('#tbody tr');
                                tbody_tr.forEach(element => {
                                    element.setAttribute('class', 'hide-order');

                                });
                            }
                        }

                    });
            }
        }
    });



    $(document).on('click', '#accepte', function (e) {
        e.preventDefault();


        if (final_price.textContent > 0) {

            let confirmMessage = "هل تريد تاكيد الفاتورة ؟";

            if (confirm(confirmMessage) == true) {

                let tbody_tr = document.querySelectorAll('#tbody tr');
                tbody_tr.forEach(element => {
                    element.setAttribute('class', 'hide-order');

                });

                // this.classList.add('done-reset');
                $.post('/add-reset', {
                    _token: $(this).attr('_token'),
                    final_price: final_price.textContent,
                    table_number: salesTableNumber.getAttribute('id'),
                    weater_id :   $("select[name='weater_name']").val()

                }, function (data, status, xhr) {

                    if (data.status == true) {

                        console.log("status success => " + status);
                        final_price.textContent = 0;
                    }
                });

            }
        }


    });


// box-print

    $(document).on('click' ,'#print_report',function(){
        document.querySelector('.box-print').style.visibility= 'hidden';
          setTimeout( function(){
           print();
           document.querySelector('.box-print').style.visibility = 'visible';
        },1000)

    });


    // $(document).on('click','.type-food',function(){
    //      $.post('/add-to-orders' ,
    //            {
    //             _token          : this.getAttribute('_token'),
    //             type_id         : this.getAttribute('data-typeId'),
    //             type_name       : this.getAttribute('data-typeName'),
    //             type_amount     : 1,
    //             type_price      : this.getAttribute('data-typePrice'),
    //             final_price     : this.getAttribute('data-typePrice'),

    //            },function(data , status,xhr){

    //         if(data.status == true && status == "success"){

    //         }

    //       });
    //     console.log(this.getAttribute('data-typeId'));
    //     console.log(this.getAttribute('data-typeName'));
    //     console.log(this.getAttribute('data-typePrice'));


    //   this.getAttribute('data-typeName');
    //   this.getAttribute('data-typePrice');
    //   this.getAttribute('data-tpyeId');

    // //   setItem(this.getAttribute('data-typeName');

    // });




    // ===== Start js for Side Menu ======

    // ==== get Element ====
    let toggelMenu = document.getElementById('toggel-menu'),
        sideMenu = document.getElementById('main-menu'),
        mainContent = document.getElementById('main-content');

    // ===== toggle to hile and show side menu ====
    // toggelMenu.onclick = function () {
    //     sideMenu.classList.toggle('hide');
    //     if (sideMenu.classList.contains('hide')) {
    //         mainContent.classList.remove('col-md-10');
    //         mainContent.classList.remove('col-sm-10');
    //         mainContent.classList.remove('col-xs-10');
    //         mainContent.classList.add('col-md-12');
    //         mainContent.classList.add('col-sm-12');
    //         mainContent.classList.add('col-xs-12');
    //     } else {
    //         sideMenu.classList.add('show');
    //         mainContent.classList.remove('col-md-12');
    //         mainContent.classList.remove('col-sm-12');
    //         mainContent.classList.remove('col-xs-12');
    //         mainContent.classList.add('col-md-10');
    //         mainContent.classList.add('col-sm-10');
    //         mainContent.classList.add('col-xs-10');


    //     }
    // }

    // ===== End js for Side Menu ======


    // var delete_category  = document.getElementsByClassName('delete-category');
    // console.log(delete_category);
    // $(document).on('click','.delete-category' ,function(e){
    // // delete_category.onclick = function(e){
    // e.preventDefault();
    //     function confirm_Function() {
    //         var message = "هل تريد حذف بيانات الحضور!";
    //         var delete_data = confirm(message);


    //       };
    //       confirm_Function();
    // };


}

