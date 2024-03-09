<!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="A" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="modalName"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->

                                    <div class="text-center" style="position: relative;">
                                        <h1 id="timer" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3em; margin-top: 30%;">00:00:00</h1>
                                        
                        
                                        <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" alt="Background Image" />
                                    </div>
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />

                                    <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                                        <!-- Name input-->
                                        <div class="form-floating mb-3">
                                            <input class="form-controlq" id="name" type="text" placeholder="Enter name..."  />
                                            
                                        </div>
                                       </form>
                                    <!-- Portfolio Modal - Text-->

                                    <p class="mb-4">TONG :<span id="modalPrice"></span> </br> Game : <span id="counter">1</span></br> TOTAL :<span id="totalc">1</span></p>
                                    <button  class="btn btn-primary"  onclick="startStopTimer()" id="clickButton"> 
                                        Play Again
                                    </button>
                                    <button class="btn btn-primary" data-bs-dismiss="modal" onclick="stopTimer()" >         
                                        End Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-modal modal fade" id="B" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="modalNameB"></h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->

                                    <div class="text-center" style="position: relative;">
                                        <h1 id="timerB" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3em; margin-top: 30%;">00:00:00</h1>
                                        
                        
                                        <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" alt="Background Image" />
                                    </div>
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />

                                    <form>
    <div>
        <input class="form-check-input" type="checkbox" id="playWithOwner" onchange="toggleInputs()">
        <label class="form-check-label" for="playWithOwner">Play with the owner</label>
        <div id="inputContainer" style="display: none;">
            <input class="half-size" id="bet" type="text" placeholder="Enter bet...">
            <input class="half-size" id="prize" type="text" placeholder="Enter prize...">
            <br><b> <label for="resultLabel"></label>
             <span id="resultLabel"></span></b><br>
            <a onclick ="btnwin()" style="display: inline-block; border: 1px solid #ccc; cursor: pointer;  padding: 10px 20px; margin: 5px; border-radius: 5px; background-color: green; ">WIN</a> 
            <a onclick ="btnloss()" style="display: inline-block; border: 1px solid #ccc; cursor: pointer;  padding: 10px 20px; margin: 5px; border-radius: 5px; background-color: red;">LOSS</a> 
        
</div>
</form>
                                

                                    <p class="mb-4">TONG :<span id="modalPriceB"></span> </br> Game : <span id="counter">1</span></br> TOTAL :<span id="totalc">1</span></p>
                                    <button  class="btn btn-primary"  onclick="startStopTimerB()" id="clickButtonB"> 
                                        Play Again
                                    </button>
                                    <button class="btn btn-primary" data-bs-dismiss="modal" onclick="stopTimerB()" >         
                                        End Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="c" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">ITSYASAN 10</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->

                                    <div class="text-center" style="position: relative;">
                                        <h1 id="timer" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); font-size: 3em; margin-top: 30%;">00:00:00</h1>
                                        
                        
                                        <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" style="width: 100%; height: 100%; object-fit: cover; position: absolute; top: 0; left: 0;" alt="Background Image" />
                                    </div>
                                    <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />

                                    <form >
                                        <div >
                                            <input class="form-check-input" type="checkbox" id="playWithOwner">
                                            <label class="form-check-label" for="playWithOwner">Play with the owner</label>
                                        </div>
                                    
                                        <!-- Prize input -->
                                        <div >
                                            <input class="form-control" id="prize" type="text" placeholder="Enter prize...">
                                            <label for="prize">Prize</label>
                                        </div>
                                    </form>
                                    
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">TONG :10 </br> Game : <span id="counter">1</span></br> TOTAL :<span id="totalc">1</span></p>
                                    <button  class="btn btn-primary"  onclick="startStopTimer()" id="clickButton" style="background-color:green;"> 
                                        WIN22222
                                    </button>
                                    <button class="btn btn-primary" data-bs-dismiss="modal" onclick="stopTimer()" style="background-color: crimson;">         
                                       LOSS
                                    </button>
                                    <button  class="btn btn-primary"  onclick="startStopTimer()" id="clickButton"> 
                                        Play Again
                                    </button>
                                    <button class="btn btn-primary" data-bs-dismiss="modal" onclick="">         
                                        End Game
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        