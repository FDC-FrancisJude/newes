@extends('layouts.app')

@section('title', 'Pre-enroll | Madridejos Community College')

@section('content')

  <main class="main light-background">
    
    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Pre-enrollment</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Pre-enrollment</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Enroll Section -->
    <section id="pre-enroll" class="pre-enroll section">

      <div class="container" data-aos="fade-up">

        <div class="row enroll-form">
          <!-- Header and Subheader -->
          <div class="col-12 text-center">
            <h2>Pre-enrollment for Academic Year: 2025-2026 | First Sem </h2>
            <br>
            <h1>
              <i class="bi bi-quote quote-icon-left"></i>
                New Students
              <i class="bi bi-quote quote-icon-right"></i>
            </h1>
          </div>

          <!-- Form -->
          <div class="col-lg-12 form" action="#" method="POST">
            <div class="col-12 text-left">
              <h5 class="fst-italic"><strong>Notes:</strong> 
              Fill out the form below to pre-enroll for the upcoming academic year. Please make sure to provide accurate information.
              Type <strong>N/A</strong>  if field is not applicable.
            </h5>
            </div>
            <hr> 
            <form class="row g-3 needs-validation" novalidate>
              <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Personal Information</h2>
              </div>

              <div class="col-md-4">
                <label for="validationCustom01" class="form-label">First Name</label>
                <input type="text" class="form-control" id="validationCustom01"  placeholder="Ex: Francis Jude" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid first name.
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Mancio" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid middle name.
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Medallo" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid last name.
                </div>
              </div>

              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Senior High School Strand</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Stem" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid first strand.
                </div>
              </div>
              <div class="col-md-8">
                <label for="validationCustom02" class="form-label">Address</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Poblacion, Madridejos, Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid address.
                </div>
              </div>

              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Status</label>
                <select class="form-select" id="validationCustom04" required>
                  <option selected disabled value="">Select Status</option>
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                  <option value="Widowed">Widowed</option>
                  <option value="Separated">Separated</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Others">Others</option>
                </select>
                <div class="invalid-feedback">
                  Please select a valid status.
                </div>
              </div>
              <div class="col-md-4">
                <label for="validationCustom04" class="form-label">Gender</label>
                <select class="form-select" id="validationCustom04" required>
                    <option selected disabled value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Other</option>
                </select>
                <div class="invalid-feedback">
                  Please provide a valid gender.
                </div> 
              </div>
              <div class="col-md-4">
                <label for="datepicker" class="form-label">Date of Birth</label>
                <input type="text" class="datepicker form-control" id="datepicker"  placeholder="Select a date" required>
                <div class="invalid-feedback">
                  Please provide a valid date of birth.
                </div>
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Place of Birth</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Malbago, Madridejos, Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid place of birth.
                </div> 
              </div>
              <div class="col-md-3">
                <label for="validationCustom02" class="form-label">Regilion</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Roman Catholic" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid religion.
                </div> 
              </div>
              <div class="col-md-3">
                <label for="contact" class="form-label">Contact No</label>
                <input type="tel" class="form-control" id="contact" placeholder="Ex: 0917-123-4567" value="" required oninput="validatePhoneNumber(this)">
                <div class="invalid-feedback">
                  Please provide a valid contact number.
                </div> 
              </div>

              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">Home Zipcode</label>
                <input type="number" class="form-control" id="validationCustom02" placeholder="Ex: 6053" value="" required oninput="validateZipcode(this)">
                <div class="invalid-feedback">
                  Please provide a valid zipcode.
                </div> 
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">NSAT Score</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: 42 | N/A" min="1" value="" required>
                <div class="invalid-feedback">
                  Please provide a valid NSAT score.
                </div> 
              </div>
              <div class="col-md-4">
                <label for="validationCustom02" class="form-label">NSAT Year</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: 2008 | N/A" min="1000" value="" required>
                <div class="invalid-feedback">
                  Please provide a valid NSAT year.
                </div> 
              </div>

              <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Guardian/Parents Information</h2>
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Guardian/Parents Name</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Jose Rizal Mercado" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid guardian/parents name.
                </div> 
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Guardian/Parents Occupation</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Nurse" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid guardian/parents occupation.
                </div> 
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Guardian/Parents Address</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Tugas, Madridejos Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid guardian/parents address.
                </div> 
              </div>

              <div class="section-title aos-init aos-animate" data-aos="fade-up">
                <h2>Education Information</h2>
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Elementary</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Malbago Elemenraty School" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid elementary school.
                </div> 
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">School Year </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: 2012-2013" value="" required oninput="validateSchoolYear(this)">
                <div class="invalid-feedback">
                  Please provide a valid school year.
                </div> 
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">School Address (Elementary)</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Malbago, Madridejos, Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid school address.
                </div> 
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">High School</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Madridejos National High School" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid high school.
                </div> 
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">School Year </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: 2019-2020" value="" required oninput="validateSchoolYear(this)">
                <div class="invalid-feedback">
                  Please provide a valid school year.
                </div> 
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">School Address (High School) </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Poblacion, Madridejos, Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid school address.
                </div> 
              </div>

              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">Last School Attended/School Graduated</label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Madridejos National High School" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback"> 
                  Please provide a valid school.
                </div> 
              </div>
              <div class="col-md-6">
                <label for="validationCustom02" class="form-label">School Year </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: 2019-2020" value="" required oninput="validateSchoolYear(this)">
                <div class="invalid-feedback">
                  Please provide a valid school year.
                </div> 
              </div>
              <div class="col-md-12">
                <label for="validationCustom02" class="form-label">School Address (High School) </label>
                <input type="text" class="form-control" id="validationCustom02" placeholder="Ex: Poblacion, Madridejos, Cebu" value="" required oninput="capitalizeFirstLetterInWords(this)">
                <div class="invalid-feedback">
                  Please provide a valid school address.
                </div> 
              </div>

              <div class="col-12 ">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                  <label class="form-check-label" for="invalidCheck">
                    Agree to terms and conditions
                  </label>
                  <div class="invalid-feedback">
                    You must agree before submitting.
                  </div> 
                </div>
              </div>
              <div class="col-12 text-center">
                <button class="btn btn-primary custom-btn" type="submit">Submit form</button>
              </div>
            </form>
          </div>
        </div>

      </div>

    </section><!-- /Enroll Section -->

  </main>

  <script>
    $(document).ready(function() {
      
      @if (!auth()->check())
          $('#signInModal').modal({
              backdrop: 'static', // Prevent closing when clicking outside
              keyboard: false      // Prevent closing with Esc key
          }).modal('show');
      @endif
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission if invalid
        Array.prototype.slice.call(forms)
          .forEach(function (form) {
            form.addEventListener('submit', function (event) {

              var input = document.getElementById("datepicker");
              if (!input.value) {
                  input.classList.add("is-invalid"); // Show error if empty
                  input.setCustomValidity("Please select a valid date.");
                  event.preventDefault(); // Prevent form submission
                  sweetAlert("Error", "Please fill out the required fields.", "error");
              } else {
                  input.setCustomValidity(""); // Reset validation
              }
              
              if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                sweetAlert("Error", "Please fill out the required fields.", "error");
              }
              form.classList.add('was-validated')
            }, false)
          })


        if (typeof $.fn.pickadate !== 'undefined') {
            $('.datepicker').pickadate({
                format: 'yyyy-mm-dd',
                selectMonths: true,
                selectYears: 100,
                today: 'Today',
                clear: 'Clear',
                close: 'Close',
                closeOnSelect: true,
                min: new Date(1900, 0, 1),
                max: new Date(),
                onSet: function(context) {
                    if (context.select) {
                        var input = document.getElementById("datepicker");
                        input.classList.remove("is-invalid");
                        input.classList.add("is-valid");
                        input.setCustomValidity("");
                    }
                }
            });
        } else {
            console.error('Pickadate.js is not loaded or there is a conflict.');
        }
    });
  </script>

@endsection