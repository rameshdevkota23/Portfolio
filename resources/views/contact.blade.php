<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
       <div class="container mt-5">
        <h1 class="text-warning mb-5 border-button">CONTACT US</h1>
        <div class="row mb-5">
            <p class="mx-auto mb-5">
                Do you have amy questions? Please do not hesitate to 
                contact. I will come back to you within a matter of hours 
                to help you.
            </p>
            <div class="col-sm-9 mb-5">
                <form action="{{asset('/')}}register" method="post">
                   @csrf
                    <div row g-3>
                        <div class="col-md-6">
                            <label for="inputName">Your Name</label>
                            <input name="uname"type="text" class="form-control mt-2" id="inputName" required/>
                        </div>
                        <div class="col-md-6">
                            <label for="inputEmail">Your Email *</label>
                            <input name="email" type="email" class="form-control mt-2" id="inputEmail" required/>
                        </div>
                      <div class="col-md-12 mb-3">
                        <label for="inputTextarea">Your message</label>
                        <textarea type="text" name="address"class="form-control mt-2" id="inputTextarea" required></textarea>
                    
                      </div>
                    </div>
                    <button name= "submit" class="btn btn-primary" type="submit">Send</button>
                    </form>
            </div>
            <div class="col-sm-3 text-center">
                <ul class="list-unstyled">
                    <li>
                        <i class="fas fa-map-marker-alt fa-x i-color"></i>
                        <p>Banphikot, Rukum Nepal</p>
                    </li>
                    <li>
                        <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                        <p>9866800235</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                        <p>devkotarmesh79@gmail.com</p>
                    </li>
                </ul>
            </div>
                    </div>
                    
                </form>
            </div>
        </div>
       </div>
    </x-slot>
</x-layout>