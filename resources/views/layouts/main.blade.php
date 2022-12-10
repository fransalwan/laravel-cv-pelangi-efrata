<!doctype html>
<html lang="en" class="scroll-smooth">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    {{-- Features --}}
    <link href="css/features.css" rel="stylesheet">

    {{-- Tailwind --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script>
      if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
      } else {
        document.documentElement.classList.remove('dark')
      }
    </script>
    
        
    <title>CV PELANGI EFRATA | {{ $title }}</title>
  </head>
  <body>

    @include('partials.navbar')
    
    <div>
      @yield('container')
    </div>
   
    @include('partials.footer')

    {{-- back to top Start --}}
    <a href="#home" class="hidden fixed  justify-center items-center  z-[9999] bottom-4 right-4 h-14 w-14 bg-orange rounded-full p-4 hover:animate-pulse" id="to-top">
      <span class="block w-5 h-5 mt-2 rotate-45 border-t-2 border-l-2"></span>
    </a>
    {{-- back to top End --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $(document).ready(function(){
        $("#contact-frm").submit(function(e){
          e.preventDefault();
          let url = $(this).attr('action');
          $('#btn').attr('disabled', true);
          
          $.post(url, 
          {
            '_token': $("#token").val(),
            email: $("#email").val(),
            name: $("#name").val(),
            NoHp: $("#NoHp").val(),
            message: $("#msg").val()
          }, 
          function (response){
            if(response.code == 400){
              $('#btn').attr('disabled', false);
              let error = '<span class="p-2 text-white bg-red-500 rounded-lg">'+response.msg+'</span>';
              $('#res').html(error);
            }else if(response.code == 200) {
              $('#btn').attr('disabled', false);
              let success = '<span class="p-2 text-white bg-green-600 rounded-lg">'+response.msg+'</span>';
              $('#res').html(success);
            }
          });
          
        })
      })
    </script>
  </body>
</html>