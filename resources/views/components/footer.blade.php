
    <div class="footer container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-around align-item-center">
                
                <h4>
                    {{env('APP_NAME')}}
                </h4>
                <div>
                 <h5>Contattaci ai seguenti indirizzi</h5>
                 <ul>
                    <li>
                        {{env('MAIL_FROM_ADDRESS')}}
                    </li>
                    <li>
                        Tel: 12345678910
                    </li>
                    <li>
                        P.IVA: 12345678101112131415
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
                    </li>
                    
                 </ul>
                </div>
            </div>
        </div>

   