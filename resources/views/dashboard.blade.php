@extends('padrao')
@section('content')

<x-app-layout>
   
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <br>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    
                    <!------------------------------------------Logo e titulo---------------------------------------->
                    <img src="{{'/img/logo-footer.png'}}" alt=""> 

                    
                </div>

                <!-------------------------------- Caixas de texto ------------------------------->
                <br>
                <div class="row row-cols-1 row-cols-md-2 g-4">
                    <div class="col">
                        <div class="card">
                        
                        <div class="card-body">
                            <h5 class="card-title">Quem Somos?</h5>
                            <p class="card-text">A Bluetech é uma empresa de tecnologia voltada principalmente para a segurança, que busca mudar a vida cotidiana para melhor, inclusive a sua. Este site é focado especificamente em um de nossos aparelhos, o Stay Safe, um sensor de proximidade e por aqui você pode monitorá-lo em tempo real, não importa onde esteja.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Por Que?</h5>
                            <p class="card-text">Cada vez mais a tecnologia avanças, mas a segurança não necessariamente avança junto com ela. Com isso em mente, a Bluetech veio para garnatir que a sua residência e que as suas propriedades fiquem seguras usando tecnologia confiável, acessível e de simples manuseio.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Para Que?</h5>
                            <p class="card-text">O objetivo deste site é fazer o monitoramento do aparelho Stay Safe, um sensor de proximidade. Com ele configurado, instalado em sua residência e com acesso a Internet, você pode observar o status dele dentro ou fora da sua casa utilizando este mesmo site a qualquer momento do seu dia.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Como?</h5>
                            <p class="card-text">Para acessar nossas funcionalidades, basta realizar o seu cadastro aqui no site, utilizando seu endereço de e-mail. Com a conta criada, vá até página <i>Seu Sensor</i> e cadastre seu aparelho clicando no botão logo abaixo da tabela. Para efetuar o cadastro, é preciso fornecer o código da sua conta, que pode ser visto no seu perfil.</p>
                        </div>
                        </div>
                    </div>
                </div>
                
            </div>
</x-app-layout>
@endsection