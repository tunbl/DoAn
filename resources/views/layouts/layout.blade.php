<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <base href="{{asset('')}}">
    <title> @yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./css/bootstrap.min.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="./css/slick.css" />
    <link type="text/css" rel="stylesheet" href="./css/all.css" />
    <link type="text/css" rel="stylesheet" href="./css/slick-theme.css" />
    <!-- autocomple search  -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="./css/nouislider.min.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="./css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>


   
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
    <div id="fb-root"></div>
   


    <!-- jQuery Plugins -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="./js/nouislider.min.js"></script>
    <script src="./js/jquery.zoom.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/ajax.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=225922998827445&autoLogAppEvents=1"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#loginAjax').click(function(){
                var username = $('#username').val();
                var password = $('#password').val();
                $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
                $.ajax({
                    url:'{{route("loginCus")}}',
                    type:'POST',
                    data:{
                        username: username,
                        password: password
                    },
                    success:function(data){
                        console.log(data);
                        if(data.error == true){
                            if(data.message.username != undefined){
                                $('.errorUsername').html(data.message.username[0]);
                            }
                            if(data.message.password != undefined){
                                $('.errorPassword').html(data.message.password[0]);
                            }
                            if(data.message.errorlogin != undefined){
                                $('.errorlogin').html(data.message.errorlogin[0]);
                            }
                        }
                        else{
                            window.location.href = "http://localhost/DuAnTotNghiep/project/project/public/";
                        }
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
}
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
    $('#buttonChangeInfo').click(function(){
        var name = $('#nameUserChange').val();
        var phone = $('#phoneUserChange').val();
        var address = $('#addressUserChange').val();
        var id = $('#idUser').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'{{route("update-cus-info-normal")}}',
                    type:'POST',
                    data:{
                        id:id,
                        name: name,
                        phone: phone,
                        address:address
                    },
                    success:function(data){
                        alert('Thay đổi thông tin thành công');
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
                }           
            });
    });
});</script>
<script type="text/javascript">
        $(document).ready(function(){
    $('#buttonChangePass').click(function(){
        var OldPassWord = $('#OldPassWord').val();
        var NewPassWord = $('#NewPassWord').val();
        var ConfirmNewPassWord = $('#ConfirmNewPassWord').val();
        var id = $('#idUserPass').val();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                url:'{{route("update-cus-info-pass")}}',
                    type:'POST',
                    data:{
                        id:id,
                        OldPassWord: OldPassWord,
                        NewPassWord: NewPassWord,
                        ConfirmNewPassWord: ConfirmNewPassWord
                    },
                    dataType:'json',
                    success:function(data){
                        if(data.error == true){
                            if(data.message.OldPassWord != undefined){
                                $('#errorOld').html(data.message.OldPassWord[0]);   
                            }else{
                                $('#errorOld').html('');
                            }
                            if(data.message.errorlogin != undefined){
                                $('#errorOld').html(data.message.errorlogin[0]);   
                            }else{
                                $('#errorOld').html('');
                            }
                            if(data.message.NewPassWord != undefined){
                                $('#errorNew').html(data.message.NewPassWord[0]);   
                            }else{
                                $('#errorNew').html('');
                            }
                            if(data.message.ConfirmNewPassWord != undefined){
                                $('#errorConfirm').html(data.message.ConfirmNewPassWord[0]);   
                            }else{
                                $('#errorConfirm').html('');
                            }
                        }
                        else{
                            $('#errorOld').html('');
                            $('#errorNew').html('');
                            $('#errorConfirm').html('');
                            $('#OldPassWord').val('');
                            $('#NewPassWord').val('');
                            $('#ConfirmNewPassWord').val('');
                            alert("Đổi mật khẩu thành công");
                        }
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
                }           
            });

    });
});
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#submitRegisterForm').click(function(){

                var nameUser = $('#nameUser').val();
                var phone = $('#phoneUser').val();
                var email = $('#emailUser').val();
                var password = $('#passwordUser').val();
                var address = $('#addressUser').val();
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    url:'{{route("submitRegister")}}',
                    type:'POST',
                    data:{
                        nameUser: nameUser,
                        phoneUser: phone,
                        emailUser: email,
                        passwordUser: password,
                        addressUser: address
                    },
                    success:function(data){
                        console.log(data);
                        if(data.error == true){
                            if(data.message.nameUser != undefined){
                                $('.errorNameUser').html(data.message.nameUser[0]);
                            }
                            if(data.message.emailUser != undefined){
                                $('.errorEmailUser').html(data.message.emailUser[0]);
                            }
                            if(data.message.passwordUser != undefined){
                                $('.errorPasswordUser').html(data.message.passwordUser[0]);
                            }
                            if(data.message.phoneUser != undefined){
                                $('.errorPhoneUser').html(data.message.phoneUser[0]);
                            }
                            if(data.message.addressUser != undefined){
                                $('.errorAddressUser').html(data.message.addressUser[0]);
                            }
                            if(data.message.errorloginPhone != undefined){
                                $('.errorPhoneUser').html(data.message.errorloginPhone[0]);
                            }
                            if(data.message.errorloginEmail != undefined){
                                $('.errorEmailUser').html(data.message.errorloginEmail[0]);
                            }
                        }
                        else{
                            window.location.href = "http://localhost/DuAnTotNghiep/project/project/public/";
                        }
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
}
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.addComment').click(function(){
                var id = $(this).data('id').split(',');
                var comment = $('.contentComment').val();
                var idUser = id[0];
                var idProduct = id[1];

                console.log(idUser);
                console.log(idProduct);
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    url:'{{route("add-comment")}}',
                    type:'GET',
                    data:{
                        idUser:idUser,
                        idProduct:idProduct,
                        comment:comment
                    },
                    success:function(data){
                        console.log(data);
                        var div = `<li>
                                        <div class='review-heading'>
                                            <h5 class='name'>`+data.name+`</h5>
                                            <p class='date'>`+data.date+`</p>
                                        </div>
                                        <div class='review-body'>
                                            <p>`+data.content+`</p>
                                        </div>
                                    </li>`
                        $('#comment-show').append(div);
                        $('.contentComment').val('');
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
                    }
                });
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#refreshPage').click(function(){
                
                window.location.reload();
            })
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){

            $('.AddToCart').click(function(){
                qty = $('.qtyAddCart').val();
                id = $(this).data('idproduct');
                $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                $.ajax({
                    url:'{{route("addCart")}}',
                    type:'GET',
                    data:{
                        id: id,
                        qty: qty
                    },
                    success:function(data){
                        $('#itemCartAll').html(data.qty +' Item(s) selected');
                        $('#itemCart2').html(data.qty);
                        
                    },
                    error: function(xhr, status, error) {
              
              alert(xhr.responseText);
}
                });
            });
        });
    </script>
	<script type="text/javascript">
        $('#searchname').autocomplete({
            source: '{!!URL::route('autocomplete')!!}',
            minlenght:1,
            autoFocus:true,
            select:function(e,ui){
                // alert(ui);
                //$('#id').val(ui.item.id);
                //$('#name').val(ui.item.value);
                return false;		 
            }
        })
        .autocomplete( "instance" )
        $('#searchname')._renderItem = function( ul, item ) {
            console.log('item', item);
        return $( "<li>" )
    
            .append("<a href='abc'>" + item.name + "<br>"+  +"<img style='height:50px;width:50px' src="+item.detail+" >"+ "</a>" )
            // lay hinh item . theo database
     
            //.append( "<div>"+ +"<p>"+ "<span>"+item.name+"  " +"</span>"+ "<span>"  +"<img style='height:50px;width:50px' src="+'/img/'+item.image+" >"+"</span>"+"</p>"+ "</div>" )
            .appendTo( ul );
        };
        
            
    </script>
    
   
</body>

    

</html>
