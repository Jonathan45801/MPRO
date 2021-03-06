<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>Sistem Informasi Kegiatan Mahasiswa IKOM</title>

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/sidebar.min.css')}}">
<link rel="stylesheet" href="{{asset('css/datatables.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-78259962-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-78259962-2');
</script>

<style>
    @font-face {
        font-family: 'GoogleSans-Regular'; /*a name to be used later*/
        src: url('../font/GoogleSans-Regular.ttf'); /*URL to font*/
    }
    body{
        background-color: #edf1f5 !important;       
        font-family: GoogleSans-Regular !important;
        background:url('../img/background_body.png');        
        background-size:100%;        
        position: relative !important;
    }
    #contentCard{
        position: absolute;
        font-size: 2rem;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
    }
    .activeMenu{
        background-color: #000000;
        color: white !important;
    }
    #historyApproved{
        height: 50px;
    }
    .kosong{
        display: none !important;
    }
    table#tUserManagement th
    {
        background-color: rgb(0, 123, 255);
        color: white;
    }

    table#tDosenDashboard th
    {
        background-color: rgb(0, 150, 255);
        color: white;
    }
</style>
