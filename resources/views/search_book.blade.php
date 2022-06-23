<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Shtepia Kadare</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        .navbar-dark .navbar-nav .nav-link {
    color: white;
}
            .title{
                padding-top: 40px;

            }
            .navbar-nav{
                font-weight: 600;
            }
            .search-form{
                padding-top: 15px;
                padding-bottom: 15px;
            }
            body {
                font-family: 'Roboto', sans-serif;
            }
            .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .show>.nav-link {
    color: #fff;
    border-bottom: 3px #e2c75a solid;
}
.badge {
    display: block;
        padding: 8px;
    font-size: 15px;
    background: #c5a93b;
    }
    .card-footer {
    padding: 0.5rem 1rem;
    background-color: #fff;
    border-top: none;
}
.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #055160;
    border-color: #055160;
}

.footer-widgets {
    padding-top: 80px;
    padding-bottom: 80px;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    border-top: 1px solid #ebebeb;
        background-color: #F5F5F5;
}
.widget ul {
    padding-left: 0;
    list-style: none;
    margin: 0;
}
img.alignnone.size-full.wp-image-226 {
    height: auto;
    max-width: 100%;
}
.btn.btn-rounded {
     border-radius: 50px
 }

 .btn-outline-facebook {
     border: 1px solid #3b579d;
     color: #3b579d
 }

 .btn-outline-facebook:hover {
     background: #3b579d;
     color: #ffffff
 }


 .btn-outline-twitter {
     border: 1px solid #2caae1;
     color: #2caae1
 }


 .btn-outline-instagram {
     border: 1px solid #dc4a38;
     color: #dc4a38
 }

 .btn-outline-twitter:hover {
     background: #2caae1;
     color: #ffffff
 }


 .btn-outline-instagram:hover {
     background: #e52d27;
     color: #ffffff
 }

 .btn-facebook {
     background: #3b579d;
     color: #ffffff
 }


 .btn-twitter {
     background: #2caae1;
     color: #ffffff
 }

 

 .btn-instagram {
     background: #c32aa3;
     color: #ffffff
 }

 .btn-facebook:hover,
 .btn-facebook:focus {
     background: #2d4278;
     color: #ffffff
 }

 

 .btn-twitter:hover,
 .btn-twitter:focus {
     background: #1b8dbf;
     color: #ffffff
 }

 .btn-instagram:hover,
 .btn-instagram:focus {
     background: #c32aa3;
     color: #ffffff
 }
 #colophon {
    padding: 20px 0px;
    background-color: #F5F5F5;
}
.site-copyright {
    padding-top: 15px;
    padding-bottom: 15px;
    color: #595959;
    font-size: 13px;
    text-transform: uppercase;
    border-top: 1px solid #ebebeb;
}



        
    </style>
    </head>
    <body class="antialiased">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="https://shtepiakadare.tirana.al/"><img src="https://shtepiakadare.tirana.al/wp-content/uploads/2019/09/logo-final-e1568377792521.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a  class="nav-link" href="https://shtepiakadare.tirana.al/">KREU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="https://shtepiakadare.tirana.al/rreth-nesh/">RRETH NESH</a>
        </li>
         <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">FONDI</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://shtepiakadare.tirana.al/edukimi/">EDUKIMI</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://shtepiakadare.tirana.al/lajme/">LAJME</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="https://shtepiakadare.tirana.al/kontakto/">KONTAKTO</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>

    <div class="container">
       <h2 class="title">Fondi</h2>

       <p>
Fondi i Shtëpisë Studio Kadare përfshin shumëllojshmëri materialesh burimore. Ai kryesisht përbëhet nga mbi 1000 libra të autorit, një pjesë e të cilëve bartin dedikime, tregues të thurjes sociale të kohës, apo përkthime poezish të pabotuara ndonjëherë të Ismail Kadaresë. Gjithashtu si pjesë të tij mund të numërojmë dorëshkrime dhe daktilografime të autorit dhe të së shoqes, shkrimtares Elena Kadare, fotografi origjinale personale dhe familjare, objekte dhe sende të autorit, kopje të para të botimeve të ndryshme si dhe element të tjerë të cilët e kontenstualizojnë studjuesin në hapësirën kulturore të pasluftës.<br><br>
Fondi është i aksesueshëm në mënyrë dixhitale nëpërmjet Dhomës së Studimit, ku dhe po punohet për dixhitalizimin dhe ngritjen e arkivit dixhital të autorit. Gjithashtu fondi do të mund të aksesohet nga të interesuar dhe në origjinal pas kryerjes së një kërkese dhe regjistrimit të nevojshëm me dokument identifikimi.
<br><br>
Më poshtë gjeni një listë të librave të Bibliotekës Kadare, së bashku me specifikimet dhe veçoritë përkatëse.</p>
    
    <form class="d-flex search-form">
        <input class="form-control me-2" type="search" placeholder="Kërko..." aria-label="Search"name="term" value="{{ isset($searchterm) ? $searchterm : ''  }}">
        <button class="btn btn-outline-success" type="submit">Kërko</button>
      </form>

     <div class="row row-cols-1 row-cols-md-5 g-4">
        @foreach($books as $book)
  <div class="col">
    <div class="card h-100">
      <img src="http://shtepiakadare.tirana.al/wp-content/uploads/2019/12/coveri-i-librave.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{!! html_entity_decode($book['book_title']) !!}</h5>

       

      </div>
      <div class="card-footer">
      <a href="#"  data-bs-toggle="modal" data-bs-target="#exampleModal-{{$book['book_id']}}">
                              <span class="badge">Më shumë</span>
                               </a>
    </div>
    </div>
  </div>
   <div class="modal fade bs-example-modal-lg" id="exampleModal-{{$book['book_id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kartela e librit</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h5>{!! html_entity_decode($book['book_title']) !!}</h5>
      <b> Autor: </b>{{$book['author_1']}}<br>{{$book['author_2']}}<br>
      <b> Viti i botimit: </b>{{$book['publication_year']}}<br>
      <b> Përshkrim: </b>{!! html_entity_decode($book['description']) !!}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Mbyll</button>
      </div>
    </div>
  </div>
</div>
   @endforeach

</div>

        </div>
        <div class="nav-scroller py-4 mb-2"> <nav class="nav d-flex justify-content-center"> <ul class="pagination pagination-sm "> </ul> </nav> </div>
      <!--Footer-->

    <div id="sidebar-footer" class="footer-widgets" role="complementary">
        <div class="container">
            <div class="row">
                            <div class="sidebar-column col-md-3">
                    <section id="text-2" class="widget widget_text">            <div class="textwidget"><p><img loading="lazy" class="alignnone size-full wp-image-226" src="http://shtepiakadare.tirana.al/wp-content/uploads/2019/12/LOGO.jpg" alt="" width="64" height="67"></p>
</div>
        </section>  
                        <div class="template-demo">
                            <button type="button" class="btn btn-social-icon btn-facebook btn-rounded" onclick="window.location.href='https://www.facebook.com/StudioKadare/'"><i class="fa fa-facebook"></i></button> 
                            <button type="button" class="btn btn-social-icon btn-twitter btn-rounded"onclick="window.location.href='https://twitter.com/housekadare'"><i class="fa fa-twitter"></i></button> 
                            <button type="button" class="btn btn-social-icon btn-instagram btn-rounded"onclick="window.location.href='https://www.instagram.com/shtepia_studio_kadare/'"><i class="fa fa-instagram"></i></button> 
                          </div>


          
    </div>
                
                            <div class="sidebar-column col-md-3">
                    <section id="text-3" class="widget widget_text">            <div class="textwidget"><p><span style="color: #bfbfbf;">Email: </span><a href="mailto:shtepiakadare@tirana.al">shtepiakadare@tirana.al</a></p>
<p><span style="color: #bfbfbf;">Web:&nbsp;</span> <a href="http://shtepiakadare.tirana.al">shtepiakadare.tirana.al</a></p>
<p><span style="color: #bfbfbf;">Adresa:</span>&nbsp; Rruga e Dibrës, Pll. 85, Pallati me kuba karshi Hotel Tirana,&nbsp; Shk. 1, Kati 3,&nbsp; Tiranë</p>
</div>
        </section>              </div>
                
                            <div class="sidebar-column col-md-3">
                    <section id="custom_html-3" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><ul>
<li><span style="color: #e2c75a; margin-right: 10px;">→</span> <a href="/rreth-nesh/">Rreth Nesh</a></li>
<li><span style="color: #e2c75a; margin-right: 10px;">→</span> <a href="/lajme">Lajmet e fundit</a></li>
<li><span style="color: #e2c75a; margin-right: 10px;">→</span> <a href="/fondi">Fondi ynë</a></li>
<li><span style="color: #e2c75a; margin-right: 10px;">→</span> <a href="/kontakto">Kontakto</a></li>
</ul></div></section>               </div>
                                        <div class="sidebar-column col-md-3">
                    <section id="custom_html-4" class="widget_text widget widget_custom_html"><div class="textwidget custom-html-widget"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11984.07410589239!2d19.819923!3d41.3302105!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc2b85f0a8058098!2sSht%C3%ABpia%20Studio%20Kadare!5e0!3m2!1ssq!2s!4v1568374404796!5m2!1ssq!2s" width="300" height="180" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div></section>              </div>
                    
            </div>  
        </div>  
    </div>
    <footer id="colophon" class="site-footer">

<div class="container">
            <div class="row">
                    
    <div class="site-copyright col-md-12">
        
    Copyright ©<script type="text/JavaScript">document.write(new Date().getFullYear());</script>    
        Krijimi dhe mirëmbajtja e këtij website mundësohet nga <a href="https://dptiidh.tirana.al/" rel="nofollow">DPTIIDH</a>      </div><!-- .site-info -->
    
                </div>
        </div>
</footer>


    </body>
</html>
