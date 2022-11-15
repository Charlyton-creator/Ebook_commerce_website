            @extends('app')
            @section('content')
            <!-- Header Section start -->
            <header class="header">
                @include('layouts.menu')
            </header>
            <!-- Header section end -->
            <link rel="stylesheet" href="{{asset('css/cartstyle.css')}}">
            <div class="search-bar">
            </div>
            <h1 class="heading"><span>Souscription</span></h1>
            <div class="precheck">
                <p>Veuillez renseigner ces informations pour continuer svp</p>
            </div>
        <div class="infospyement">
            <div class="payment-form active" id="payment-form">
                <div class="payment-method">
                    <button class="method selected carte-credit" onclick="displayCartForm()">
                        <i class="fa-solid fa-business-time"></i>
                        <span>Carte de Crédit</span>
                        <i class="checked fa-solid fa-circle-check C"></i>
                    </button>
                    <button class="method T-money" id="T-money" onclick="displayTMoneyform()">
                        <i class="fa-solid fa-business-time"></i>
                        <span>T-Money</span>
                        <i class='bx bx-check-circle T'></i>
                    </button>
                    <button class="method Flooz" onclick="displayFloozform()">
                        <i class="fa-solid fa-business-time"></i>
                        <span>Flooz</span>
                        <i class='bx bx-check-circle F'></i>
                    </button>
                </div>
                <form class="form-cart active">
                    @csrf
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Souscription pack name</label>
                        <input type="text" class="input-default" id="pack_name" name="pack_name" value="{{ $packname }}" >
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Nom proprietaire de la carte</label>
                        <input type="text" class="input-default" id="cardholder-name" name="cardholder-name">
                    </div>
                    <div class="card-number">
                        <label for="card-number" class="label-default">Numero de carte</label>
                        <input type="number" class="input-default" id="card-number" name="card-number">
                    </div>
                    <div class="input-flex">
                        <div class="expire-date">
                            <label for="expire-date" class="label-default">Expiration date</label>
                            <div class="input-flex">
                                <input type="number" name="day" id="expire-date" placeholder="31" min="1" max="31" class="input-default">
                                /
                                <input type="number" name="month" id="expire-date" placeholder="12" min="1" max="12" class="input-default">
                            </div>
                        </div>
                        <div class="cvv">
                            <label for="cvv" class="label-default">CVV</label>
                            <input type="number" class="input-default" id="cvv" name="cvv">
                        </div>
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Votre Adresse</label>
                        <input type="text" class="input-default" id="user_adress" name="user_adress">
                    </div>
                    <button type="submit" class="p-btn btn-primary" id="payAmount">Payer<span>2000FCFA</span></button>
                </form> 
                <form class="form-tmoney">
                    @csrf
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Souscription pack name</label>
                        <input type="text" class="input-default" id="pack_name" name="pack_name" value="{{ $packname }}" >
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Nom proprietaire</label>
                        <input type="text" class="input-default" id="nom_proprietaire" name="nom_proprietaire">
                    </div>
                    <div class="card-number">
                        <label for="card-number" class="label-default">Numero de Transaction Tmoney</label>
                        <input type="number" class="input-default" id="numero_transac_tmoney" name="numero_transac_tmoney">
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Votre Adresse</label>
                        <input type="text" class="input-default" id="user_adress" name="user_adress">
                    </div>
                    <button type="submit" class="p-btn btn-primary" id="payAmount">Payer<span>2000FCFA</span></button>
                </form> 
                <form class="form-flooz">
                    @csrf
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Souscription pack name</label>
                        <input type="text" class="input-default" id="pack_name" name="pack_name" value="{{ $packname }}" >
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Nom proprietaire</label>
                        <input type="text" class="input-default" id="nom_proprietaire" name="nom_proprietaire">
                    </div>
                    <div class="card-number">
                        <label for="card-number" class="label-default">Numero de transaction Flooz</label>
                        <input type="number" class="input-default" id="numero_transac_flooz" name="numero_transac_flooz">
                    </div>
                    <div class="cardholder-name">
                        <label for="cardholder-name" class="label-default">Votre Adresse</label>
                        <input type="text" class="input-default" id="user_adress" name="user_adress">
                    </div>
                    <button type="submit" class="p-btn btn-primary" id="payAmount">Payer<span>2000FCFA</span></button>
                </form> 
            </div>
        </div>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script>
            let payementform = document.querySelector('.form-cart');
            let tmoneypaymentform = document.querySelector('.form-tmoney');
            let floozpayementform = document.querySelector('.form-flooz');
            let Tmoney = document.querySelector('.T-money');
            let Flooz = document.querySelector('.Flooz');
            let Carte_credit = document.querySelector('.carte-credit');
            let cartecheck = document.querySelector('.C');
            let tmoneycheck = document.querySelector('.T');
            let floozcheck = document.querySelector('.F');
            function displayTMoneyform(){
                if(Carte_credit.classList.contains('selected')){
                    Carte_credit.classList.remove('selected');
                    cartecheck.classList.remove('checked');  
                    payementform.classList.remove('active');
                }
                if(Flooz.classList.contains('selected')){
                    Flooz.classList.remove('selected'); 
                    floozpayementform.classList.remove('active');
                    floozcheck.classList.remove('checked'); 
                }
                tmoneypaymentform.classList.add('active');
                Tmoney.classList.add('selected');
                tmoneycheck.classList.add('checked');
            }
            function displayFloozform(){
                if(Carte_credit.classList.contains('selected')){
                    Carte_credit.classList.remove('selected');  
                    payementform.classList.remove('active');
                    cartecheck.classList.remove('checked');
                }
                if(Tmoney.classList.contains('selected')){
                    Tmoney.classList.remove('selected');  
                    tmoneypaymentform.classList.remove('active');
                    tmoneycheck.classList.remove('checked');
                }  
                floozpayementform.classList.add('active');
                Flooz.classList.add('selected');
                floozcheck.classList.add('checked');
            }
            function displayCartForm(){
                floozcheck.classList.remove('checked'); 
                tmoneycheck.classList.remove('checked');
                Flooz.classList.remove('selected');
                tmoneypaymentform.classList.remove('active');
                floozpayementform.classList.remove('active');
                Tmoney.classList.remove('selected');
                payementform.classList.add('active');
                Carte_credit.classList.add('selected'); 
                cartecheck.classList.add('checked'); 
            }
    if(Carte_credit.classList.contains('selected')){
        payementform.addEventListener('submit',function(e) {
        e.preventDefault();
        let cardholder_ame = $("#cardholder-name").val();
        let pack_name = $("#pack_name").val();
        let card_number = $("#card-number").val();
        let expire_date = $("#expire-date").val();
        let user_adress = $("#user_adress").val();
        let total = $('#payAmount').val();
        let _token = $("input[name=_token]").val();
        console.log(cardholder_ame, card_number, pack_name, expire_date, user_adress, total, _token)

        $.ajax({
            url: "{{route('souscriptionpayement')}}",
            type: "POST",
            data: {
                payement_method : 'Carte de credit',
                cardholder_ame: cardholder_ame,
                pack_name: pack_name,
                card_number: card_number,
                expire_date: expire_date,
                user_adress: user_adress,
                total : total,
                _token: _token
            },
            beforeSend: function(){
                let TimeInterval;
                Swal.fire({
                    title: 'Traitement de votre payement en cours ...',
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
                    title: 'Payement Effectué avec Succès',
                    text: "Votre Payement a été enregistrer avec succès. Votre Abonnement sera activé dans les prochaines heures",
                    showConfirmButton: true,
                    })
                    $('#payementform')[0].reset();
                    $('#payementform')[0].hide();
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
    }
    tmoneypaymentform.addEventListener('submit',function(e) {
        e.preventDefault();
        let pack_name = $("#pack_name").val();
        let nom_proprietaire = $("#nom_proprietaire").val();
        let numero_transac_tmoney = $("#numero_transac_tmoney").val();
        let user_adress = $('#user_adress').val();
        let _token = $("input[name=_token]").val();
        let total = $('#payAmount').val();
        console.log(pack_name, nom_proprietaire, numero_transac_tmoney, user_adress, total, _token)

        $.ajax({
            url: "{{route('souscriptionpayement')}}",
            type: "POST",
            data: {
                payement_method : 'Tmoney',
                pack_name: pack_name,
                nom_proprietaire: nom_proprietaire,
                numero_transac_tmoney: numero_transac_tmoney,
                total: total,
                _token: _token
            },
            beforeSend: function(){
                let TimeInterval;
                Swal.fire({
                    title: 'Traitement de votre payement en cours ...',
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
                    title: 'Payement Effectué avec Succès',
                    text: "Votre Payement a été enregistrer avec succès. Votre Abonnement sera activé dans les prochaines heures",
                    showConfirmButton: true,
                    })
                    $('#tmoneypaymentform')[0].reset();
                    $('#tmoneypaymentform')[0].hide();
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
    floozpayementform.addEventListener('submit',function(e) {
        e.preventDefault();
        let pack_name = $("#pack_name").val();
        let nom_proprietaire = $("#nom_proprietaire").val();
        let numero_transac_flooz = $("#numero_transac_tmoney").val();
        let _token = $("input[name=_token]").val();
        let total = $('#payAmount').val();
        console.log(pack_name, nom_proprietaire, numero_transac_flooz, user_adress,total, _token)

        $.ajax({
            url: "{{route('souscriptionpayement')}}",
            type: "POST",
            data: {
                payement_method : 'Flooz/MoovMoney',
                pack_name: pack_name,
                nom_proprietaire: nom_proprietaire,
                numero_transac_flooz: numero_transac_flooz,
                total: total,
                _token: _token
            },
            beforeSend: function(){
                let TimeInterval;
                Swal.fire({
                    title: 'Traitement de votre payement en cours ...',
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
                    title: 'Payement Effectué avec Succès',
                    text: "Votre Payement a été enregistrer avec succès. Votre Abonnement sera activé dans les prochaines heures",
                    showConfirmButton: true,
                    })
                    $('#floozpayementform')[0].reset();
                    $('#floozpayementform')[0].hide();
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
 @endsection