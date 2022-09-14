{{--nav pour la navbar--}}
<nav class="bg-gray-50 max-w-6xl mx-auto">
        <div class="flex justify-around items-center">
            <a class="" href="{{ route("welcome") }}">
                <img class="h-20 w-25 transform hover:scale-110 motion-reduce:transform-none" src="https://static.wixstatic.com/media/9cc29e_9d0a74b20eba4bb8a42e8e109952a81b~mv2.png/v1/fill/w_1250,h_310,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/LOGO%20WEBREATHE%20SITE.png" alt="LOGO WEBREATHE SITE.png"  srcset="https://static.wixstatic.com/media/9cc29e_9d0a74b20eba4bb8a42e8e109952a81b~mv2.png/v1/fill/w_1250,h_310,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/LOGO%20WEBREATHE%20SITE.png" fetchpriority="high">
            </a>
            <a class="rounded-md p-3 bg-blue-300 active:bg-blue-600 transform hover:scale-110 motion-reduce:transform-none" href="{{ route('module.create') }}"> Créer un module</a>
        </div>
</nav>