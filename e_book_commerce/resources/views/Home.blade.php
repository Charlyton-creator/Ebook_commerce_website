@extends('app')
@section('content')
<!-- Header Section start -->
<header class="header">
    @include('layouts.menu')
</header>
<!-- Header section end -->
@include('layouts.headerbanner')
    <!-- Icons start section-->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-plane"></i>
            <div class="content">
                <h3>Trouvé un e-book de cuisine en toute tranquilité</h3>
                <p>Ayez une reduction pouvant aller jusqu'a 50%</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-lock"></i>
            <div class="content">
                <h3>Moyens de payement sécurisés</h3>
                <p>Choisissez votre moyen de payement sans aucun souci</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-redo-alt"></i>
            <div class="content">
                <h3>Satisfait du E-book ou remboursé</h3>
                <p>Vous avez un garanti de 10jours pour l'E-Book</p>
            </div>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <div class="content">
                <h3>Support et Guide 24h/24</h3>
                <p>Vous avez des inquiétudes, vous avez bsoin de nous, appeler nous a tout moment</p>
            </div>
        </div>
    <!-- Icons start section-->
    </section>
    <!-- Featured section start-->
    <section id="featured" class="featured">
        <h1 class="heading"><span>Nos Meilleurs Offres</span></h1>
        <div class="featured-slider">
            <div class="wraper">
                <div class="box">
                    <div class="icons">
                        <a href="http://" class="fas fa-thumbs-down"></a>
                        <a href="http://" class="fas fa-heart"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/image-4-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Featured</h3>
                        <div class="price">2500FCA<span>2000FCA</span></div>
                        <a href="http://" class="btn">Ajouter au Panier</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="http://" class="fas fa-thumbs-down"></a>
                        <a href="http://" class="fas fa-heart"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/image-3-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Featured</h3>
                        <div class="price">2500FCA<span>2000FCA</span></div>
                        <a href="http://" class="btn">Ajouter au Panier</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="http://" class="fas fa-thumbs-down"></a>
                        <a href="http://" class="fas fa-heart"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/image-5.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Featured</h3>
                        <div class="price">2500FCA<span>2000FCA</span></div>
                        <a href="http://" class="btn">Ajouter au Panier</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <div class="icons">
                        <a href="http://" class="fas fa-thumbs-down"></a>
                        <a href="http://" class="fas fa-heart"></a>
                    </div>
                    <div class="image">
                        <img src="{{ asset('img/image-5.jpg') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Featured</h3>
                        <div class="price">2500FCA<span>2000FCA</span></div>
                        <a href="http://" class="btn">Ajouter au Panier</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Featured section End-->
     <!-- Newsletter Section starting-->
     <section class="newsletter">
        <form id="souscrire">
            @csrf
            <h3>Souscrivez a notre news pour etre a informer constamment sur les nouveautés</h3>
            <input type="email" name="email" id="email" placeholder="Votre email ici" class="box">
            <button type="submit" value="suscribe" class="btn">Souscrire</button>
        </form>
     </section>
      <!--Newsletter Section Ending -->
      <!--Arrivals section starting -->
      <section class="arrivals" id="arrivals">
        <h1 class="heading"><span>Nouvellement publiés</span></h1>
        <div class="arrivals-slider">
            <div class="wraper">
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </a>
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                    </div>
                </a>
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        
                    </div>
                </a>
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                    </div>
                </a>
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                    </div>
                </a>
                <a href="" class="box">
                    <div class="image">
                        <img src="{{asset('img/image-6-removebg-preview.png') }}" alt="" srcset="">
                    </div>
                    <div class="content">
                        <h3>Nouveauté</h3>
                        <div class="price">3000XOF<span>2000XOF</span></div>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        
                    </div>
                </a>
            </div>
        </div>
      </section>
      <!-- Arrivals section Ending -->
      <!-- Deals section starting-->
      <section class="deal">
        <div class="content">
            <h3>Offre Spéciale du jour</h3>
            <h1>Ayez jusqu' 50% de réduction sur l'achat d'un E-Book Pro</h1>
            <p>Offrez vous aujourd'hui la chance d'avoir un E-Book Pro et cuisiner facilement et simplement chez vous a la maison sans l'assistance d'une tierce personne!!!!. Vite L'offre prends fin dans 24H</p>
            <a href="{{ route('ebooks') }}" class="btn">Acheter Maintenant!</a>
        </div>
        <div class="image">
            <img src="{{asset('img/image-6-removebg-preview.png')}}" alt="">
        </div>
      </section>
      <!-- Deals section ending-->
      <!-- Reviews section starting-->
      <section class="reviews" id="reviews">
        <h1 class="heading"><span>Retours des Clients</span></h1>

        <div class="reviews-slider">
            <div class="wrapp">
                <div class="box">
                    <img src="{{asset('img/undraw_profile.svg')}}" alt="" srcset="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis reprehenderit. Corrupti, repudiandae ipsam rerum consectetur aspernatur perferendis alias eos, sunt, quae consequuntur deserunt soluta dolorem recusandae? Voluptatibus, necessitatibus fugiat?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/undraw_profile.svg')}}" alt="" srcset="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis reprehenderit. Corrupti, repudiandae ipsam rerum consectetur aspernatur perferendis alias eos, sunt, quae consequuntur deserunt soluta dolorem recusandae? Voluptatibus, necessitatibus fugiat?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/undraw_profile.svg')}}" alt="" srcset="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis reprehenderit. Corrupti, repudiandae ipsam rerum consectetur aspernatur perferendis alias eos, sunt, quae consequuntur deserunt soluta dolorem recusandae? Voluptatibus, necessitatibus fugiat?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/undraw_profile.svg')}}" alt="" srcset="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis reprehenderit. Corrupti, repudiandae ipsam rerum consectetur aspernatur perferendis alias eos, sunt, quae consequuntur deserunt soluta dolorem recusandae? Voluptatibus, necessitatibus fugiat?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="box">
                    <img src="{{asset('img/undraw_profile.svg')}}" alt="" srcset="">
                    <h3>Barry Allen</h3>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aspernatur, debitis reprehenderit. Corrupti, repudiandae ipsam rerum consectetur aspernatur perferendis alias eos, sunt, quae consequuntur deserunt soluta dolorem recusandae? Voluptatibus, necessitatibus fugiat?</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>

      </section>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
const formSouscription = document.querySelector("#souscrire");
formSouscription.addEventListener('submit',function(e) {
    e.preventDefault();
    let email = $("#email").val();
    let _token = $("input[name=_token]").val();
    console.log(email,_token)

    $.ajax({
        url: "{{route('newssuscribe')}}",
        type: "POST",
        data: {
            email: email,
            _token: _token
        },
        beforeSend: function(){
            let TimeInterval;
            Swal.fire({
                title: 'Traitement de votre requete en cours ...',
                html: 'Chargement dans <b></b> milliseconds.',
                timer: 10000,
                timerProgressBar: true,
                didOpen: () => {
                    Swal.showLoading()
                    const b = Swal.getHtmlContainer().querySelector('b')
                    TimeInterval = setInterval(() => {
                        b.textContent = Swal.getTimerLeft()
                    }, 100)
                },
                willClose: () => {
                    clearInterval(TimeInterval)
                }
            }).then((result) => {
                    /* Read more about handling dismissals below */
                if (result.dismiss === Swal.DismissReason.timer) {
                    console.log('I was closed by the timer')
                }
            })
        },
        success: function(response) {
            if (response) {
                Swal.fire({
                  icon: 'success',
                  title: 'Envoyé avec succès',
                  text: "Vos informations ont été prises en compte. Thanks you",
                  showConfirmButton: true,
                })
                $('#souscrire')[0].reset();
                $('#souscrire')[0].hide();
            }
        },
        error: function() {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Quelque Chose s est mal passé svp veuillez reverifier votre formulaire',
            })
        }
    });
});
</script>
      <!-- Reviews section ending-->
@endsection