@auth
@if(Auth::user()->admin) 

<div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://www.creative-tim.com" class="simple-text logo-mini">
            <div class="logo-image-small">
            <img src="../assets/img/logo-small.png">
            </div>
        </a>

      @auth
            <ul class="nav">
                @if(Auth::user()->admin)                        
                    <li class="active">
                        <a href=" {{ route('rendez_vs.index') }}" class="nav-link">Les Patients d'Aujourd'Hui</a>
                        <i class="nc-icon nc-bank"></i>
                        </li>
                        <!-- 28/05/2020 -->
                        <li class="nav-item dropdown">
                              <a class="nav-link " href="{{ route('consultation.index') }}" >liste tous mes rendez vous</a>
                        </li>

                        <!-- end 28/05/2020 -->
                        <li class="nav-item">
                            <a href="{{ route('contact.create') }}" class="nav-link">Contact</a>
                        </li>

                        
                    
                        
                    @else

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                            <a class="dropdown-item" href="/patient">Liste Patient</a>   
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    @endif
                </ul>
            @endauth
      </div>
    </div>
    @endif
</div>
    @endauth