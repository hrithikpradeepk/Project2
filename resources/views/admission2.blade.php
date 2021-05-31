@extends("theme")


@section("content")
    <div class="container"  >
        <div class="row">
          <centre><h2 style="text-align: center; color:white;"> <b>REGISTRATION - WITH CARDIO</b></h2></centre>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
               <form>
                 <BR>
               
                   <br>
                   <br>
                   <table class="table " style="height: 350px; width: 500px; margin-left: auto; margin-right: auto; border-color:black;">
              
                    <tr>
                        <td>
                            <input type="text" class="form-control" placeholder="First Name" required>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text"  placeholder="Last Name" class="form-control" required></td>
                    </tr>
                    <tr><td><input type="number" class="form-control" placeholder="Age" required></td>
                    </tr>
                    <tr>
                        <td>
                          <label style="color:white;">Gender:</label>
                            <input type="radio" name="gender" id="male" value="male"  class="form-check-input">
                            <label style="color:white;">Male</label>
                            <input type="radio" name="gender" id="female" value="female" class="form-check-input">
                            <label style="color:white;">Female</label>
                            
                        </td>
                    </tr>
                    <tr>
                       <td> <label style="color:white;">Admission Fees:</label></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="number"  placeholder="10000" class="form-control" readonly>
                        </td>
                    </tr>
                    </table>
</form>
</div>

                    <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                      <form>
                        
                    
                          <br>
                          <br>
                          <br>
                          <table class="table " style="height: 300px; border-color:black; width: 600px; margin-left: auto; margin-right: auto;">
                     
                           <tr>
                              
                               <td>
                                   <input type="text" class="form-control" placeholder="Address 1" required>
                               </td>
                           </tr>
                           <tr>
                               <td><input type="text" placeholder="Address 2" class="form-control"></td>
                           </tr>
                           <tr>
                              <td> <input type="tel" class="form-control" placeholder="Mobile Number" required>
                           </td>
                           </tr>
                           <tr>
                               
                               <td>
                                   <input type="number" class="form-control" placeholder="Weight" required>
                               </td>
                              </tr>
                              <tr>
                               
                                <td>
                                    <input type="number" class="form-control" placeholder="Height" required>
                                </td>
                               </tr>
              </table>
            
            </form>
            </div>
            
            <!-- Button trigger modal -->
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Register
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Plese click Register button to confirm Registration
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Register</button>
        </div>
      </div>
    </div>
  </div>



        </div>
    </div>
    <br>
    <br>
    <br>

    <footer class="bg-dark text-center text-white">
      <!-- Grid container -->
      <div class="container p-4 pb-0">
        <!-- Section: Form -->
        <section class="">
          <form action="">
            <!--Grid row-->
            <div class="row d-flex justify-content-center">
              <!--Grid column-->
              <div class="col-auto">
                <p class="pt-2">
                  <strong>Sign up for our newsletter</strong>
                </p>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                  <input type="email" id="form5Example2" class="form-control" />
                  <label class="form-label" for="form5Example2">Email address</label>
                </div>
              </div>
              <!--Grid column-->
    
              <!--Grid column-->
              <div class="col-auto">
                <!-- Submit button -->
                <button type="submit" class="btn btn-outline-light mb-4">
                  Subscribe
                </button>
              </div>
              <!--Grid column-->
            </div>
            <!--Grid row-->
          </form>
        </section>
        <!-- Section: Form -->
      </div>
      <!-- Grid container -->
    
      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: black">
        © 2020 Copyright:
        <a class="text-white" href="#">Catamount.com</a>
      </div>
      <!-- Copyright -->
    </footer>
   @endsection