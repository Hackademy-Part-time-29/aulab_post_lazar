
    <div class="footer container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-around align-item-center">
                <div class="logoPadder">
                    <img class="logoFooter" src="/img/logo/logo2.png" alt="">
                </div>
                <div class="separatorFooter">
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
                        <a class="nav-link underline" aria-current="page" href="{{route('careers')}}">Lavora con noi</a>
                    </li>
                    
                 </ul>
                </div>
            </div>
        </div>
        

   