<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Mobifone - Trang chủ</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="/public/backend/images/favicon.png" rel="icon">

        <!-- Google Font -->
        <link href="{{asset('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap')}}" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/lib/animate/animate.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

        <!-- Template Stylesheet -->
        <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
        <link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="top-bar-left">
                            <div class="text">
                                <h2>7h00 - 17h00</h2>
                                <p>Opening Hour Mon - Fri</p>
                            </div>
                            <div class="text">
                                <h2>+123 456 7890</h2>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="top-bar-right">
                           <!-- DANG KI -->
                          
                           <!-- END DANG KI -->
                              <!--  DANG NHAP -->
                            
                                 @php
                                    $customer_id = Session::get('customer_id');
                                    if($customer_id!=NULL){ 
                                    @endphp

                                    
                                        <a href="{{URL::to('history')}}" style="padding-right: 44px" >Lịch sử đơn hàng </a>

                                    

                                    
                                   @php
                                    }
                                   @endphp

                                <?php
                                $customer_id = Session::get('customer_id');
                                if($customer_id!=NULL){ 
                                    ?>

                                    
                                        <a href="{{URL::to('/logout-checkout')}}"> Đăng xuất :

                                        <img width="15%" src="{{Session::get('customer_picture')}}"> {{Session::get('customer_name')}} </a>

                                   


                                    <?php
                                }else{
                                   ?>
                                   <a href="{{URL::to('/dang-nhap')}}"style="padding-right: 20px"><i class="fa fa-lock"></i> Đăng nhập</a>
                                   <a href="{{URL::to('/dang-ky')}}"  > Đăng ký</a>
                                   <?php 
                               }
                               ?>
                            </a>
                            <a href="{{URL::to('/gio-hang')}}"style="padding-left: 20px"><i class="fa fa-shopping-cart" ></i>Gio hang</a>
                            <!-- END DANG NHAP -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="{{url('/')}}" class="navbar-brand"><img src="public/frontend/img/logo.png" alt="logopage"></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{url('/')}}" class="nav-item nav-link">Trang Chủ</a>
                        <a href="{{url('/gioi-thieu')}}" class="nav-item nav-link">Giới thiệu</a>
                        <a href="{{url('/service')}}" class="nav-item nav-link">Dịch vụ</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Sản phẩm</a>
                            <div class="dropdown-menu">
                                <a href="blog.html" class="dropdown-item">Sim</a>
                                <a href="{{URL('/product')}}" class="dropdown-item">Thiết bị di dộng</a>
                            </div>
                        </div>
                        <a href="{{url('/team.html')}}" class="nav-item nav-link">Tin tức</a>
                        <a href="contact.html" class="nav-item nav-link">Liên hệ</a>
                        
                     
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->


       @yield('content')
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="footer-contact">
                                    <h2>Salon Address</h2>
                                    <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                                    <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                                    <p><i class="fa fa-envelope"></i>info@example.com</p>
                                    <div class="footer-social">
                                        <a href=""><i class="fab fa-twitter"></i></a>
                                        <a href=""><i class="fab fa-facebook-f"></i></a>
                                        <a href=""><i class="fab fa-youtube"></i></a>
                                        <a href=""><i class="fab fa-instagram"></i></a>
                                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Quick Links</h2>
                                    <a href="">Terms of use</a>
                                    <a href="">Privacy policy</a>
                                    <a href="">Cookies</a>
                                    <a href="">Help</a>
                                    <a href="">FQAs</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <p>
                                Lorem ipsum dolor sit amet elit. Quisque eu lectus a leo dictum nec non quam. Tortor eu placerat rhoncus, lorem quam iaculis felis, sed lacus neque id eros.
                            </p>
                            <div class="form">
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="{{asset('https://code.jquery.com/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/frontend/lib/easing/easing.min.js')}}"></script>
        <script src="{{asset('public/frontend/lib/owlcarousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/frontend/lib/isotope/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('public/frontend/lib/lightbox/js/lightbox.min.js')}}"></script>
        
        <!-- Contact Javascript File -->
        <script src="{{asset('public/frontend/mail/jqBootstrapValidation.min.js')}}"></script>
        <script src="{{asset('public/frontend/mail/contact.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{asset('public/frontend/js/main.js')}}"></script>
        <script src="{{asset('public/frontend/js/app.js')}}"></script>
        <script src="{{asset('public/frontend/js/index.js')}}"></script>
        <script src="{{asset('public/frontend/js/slider.js')}}"></script>
        <script src="{{asset('public/frontend/js/sweetalert.min.js')}}"></script> 
        <script type="text/javascript">
    
    $('.xemnhanhsim').click(function(){
        var sim_id = $(this).data('id_sim');
        var _token = $('input[name="_token"]').val();
        $.ajax({
        url:"{{url('/quickviewsim')}}",
        method:"POST",
        dataType:"JSON",
        data:{sim_id:sim_id, _token:_token},
          success:function(data){
            $('#sim_quickview_title').html(data.sim_number);
            $('#sim_quickview_id').html(data.sim_id);
            $('#sim_quickview_price').html(data.sim_price);
       
            // $('#sim_quickview_gallery').html(data.sim_gallery);
            $('#sim_quickview_desc').html(data.sim_desc);
            
            $('#sim_quickview_value').html(data.sim_quickview_value);
            $('#sim_quickview_button').html(data.sim_button);
                }
             });
        });

        </script>

<script type="text/javascript">
                $(document).ready(function(){
                    $('.add-to-cart').click(function(){

                        var id = $(this).data('id_product');
                        // alert(id);
                        var cart_product_id = $('.cart_product_id_' + id).val();
                        var cart_product_name = $('.cart_product_name_' + id).val();
                        var cart_product_image = $('.cart_product_image_' + id).val();
                        var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                        var cart_product_price = $('.cart_product_price_' + id).val();
                        var cart_product_qty = $('.cart_product_qty_' + id).val();
                        var _token = $('input[name="_token"]').val();

                        if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
                            alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
                        }else{

                            $.ajax({
                                url: '{{url('/add-cart-ajax')}}',
                                method: 'POST',
                                data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                                success:function(){

                                    swal({
                                            title: "Đã thêm sản phẩm vào giỏ hàng",
                                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                            showCancelButton: true,
                                            cancelButtonText: "Xem tiếp",
                                            confirmButtonClass: "btn-success",
                                            confirmButtonText: "Đi đến giỏ hàng",
                                            closeOnConfirm: false
                                        },
                                        function() {
                                            window.location.href = "{{url('/gio-hang')}}";
                                        });

                                }

                            });
                        }

                        
                    });
                });
            </script>
            <script type="text/javascript">

$(document).ready(function(){
  $('.send_order').click(function(){
var total_after = $('.total_after').val();
      swal({
        title: "Xác nhận đơn hàng",
        text: "Đơn hàng sẽ không được hoàn trả khi đặt,bạn có muốn đặt không?",
        type: "warning",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Cảm ơn, Mua hàng",

          cancelButtonText: "Đóng,chưa mua",
          closeOnConfirm: false,
          closeOnCancel: false
      },
      function(isConfirm){
           if (isConfirm) {
              var shipping_email = $('.shipping_email').val();
              var shipping_name = $('.shipping_name').val();
              var shipping_address = $('.shipping_address').val();
              var shipping_phone = $('.shipping_phone').val();
              var shipping_notes = $('.shipping_notes').val();
              var shipping_method = $('.payment_select').val();

              var _token = $('input[name="_token"]').val();

              $.ajax({
                  url: '{{url('/confirm-order')}}',
                  method: 'POST',
                  data:{shipping_email:shipping_email,shipping_name:shipping_name,shipping_address:shipping_address,shipping_phone:shipping_phone,shipping_notes:shipping_notes,_token:_token,shipping_method:shipping_method},
                  success:function(){
                     swal("Đơn hàng", "Đơn hàng của bạn đã được gửi thành công", "success");
                  }
              });

              // window.setTimeout(function(){ 
              //     location.reload();
              // } ,3000);

            } else {
              swal("Đóng", "Đơn hàng chưa được gửi, làm ơn hoàn tất đơn hàng", "error");

            }
    
      });

     
  });
});


</script>
 <!--add to  cart quickview-->
 <script type="text/javascript">
       
       $(document).on('click','.add-to-cart-quickview',function(){

           var id = $(this).data('id_product');
           var cart_product_id = $('.cart_product_id_' + id).val();
           var cart_product_name = $('.cart_product_name_' + id).val();
           var cart_product_image = $('.cart_product_image_' + id).val();
           var cart_product_quantity = $('.cart_product_quantity_' + id).val();
           var cart_product_price = $('.cart_product_price_' + id).val();
           var cart_product_qty = $('.cart_product_qty_' + id).val();
           var _token = $('input[name="_token"]').val();

           if(parseInt(cart_product_qty)>parseInt(cart_product_quantity)){
               alert('Làm ơn đặt nhỏ hơn ' + cart_product_quantity);
           }else{

               $.ajax({
                   url: '{{url('/add-cart-ajax')}}',
                   method: 'POST',
                   data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:_token,cart_product_quantity:cart_product_quantity},
                   beforeSend: function(){
                       $("#beforesend_quickview").html("<p class='text text-primary'>Đang thêm sản phẩm vào giỏ hàng</p>");
                   },
                   success:function(){
                       $("#beforesend_quickview").html("<p class='text text-success'>Sản phẩm đã thêm vào giỏ hàng</p>");
                     

                   }

               });
           }

           
       });
       $(document).on('click','.redirect-cart',function(){
           window.location.href = "{{url('/gio-hang')}}";
       });
   
</script>

<script type="text/javascript">
                $(document).ready(function(){
                    $('.add-to-cart-sim').click(function(){

                        var id = $(this).data('id_sim');
                        // alert(id);
                        var cart_sim_id = $('.cart_sim_id_' + id).val();
                        var cart_sim_number = $('.cart_sim_number_' + id).val();
                        var cart_sim_image = $('.cart_sim_image_' + id).val();
                        var cart_sim_quantity = $('.cart_sim_quantity_' + id).val();
                        var cart_sim_price = $('.cart_sim_price_' + id).val();
                        var cart_sim_qty = $('.cart_sim_qty_' + id).val();
                        var _token = $('input[name="_token"]').val();

                        if(parseInt(cart_sim_qty)>parseInt(cart_sim_quantity)){
                            alert('Làm ơn đặt nhỏ hơn ' + cart_sim_quantity);
                        }else{

                            $.ajax({
                                url: '{{url('/add-cart-ajax-sim')}}',
                                method: 'POST',
                                data:{cart_sim_id:cart_sim_id,cart_sim_number:cart_sim_number,cart_sim_image:cart_sim_image,cart_sim_price:cart_sim_price,cart_sim_qty:cart_sim_qty,_token:_token,cart_sim_quantity:cart_sim_quantity},
                                success:function(){

                                    swal({
                                            title: "Đã thêm sản phẩm vào giỏ hàng",
                                            text: "Bạn có thể mua hàng tiếp hoặc tới giỏ hàng để tiến hành thanh toán",
                                            showCancelButton: true,
                                            cancelButtonText: "Xem tiếp",
                                            confirmButtonClass: "btn-success",
                                            confirmButtonText: "Đi đến giỏ hàng",
                                            closeOnConfirm: false
                                        },
                                        function() {
                                            window.location.href = "{{url('/gio-hang')}}";
                                        });

                                }

                            });
                        }

                        
                    });
                });
            </script>
    </body>
</html>
