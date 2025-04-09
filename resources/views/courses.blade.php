@extends('layouts.app')

@section('title', 'Courses | Madridejos Community College')

@section('content')

  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-8">
              <h1>Courses</h1>
              <p class="mb-0">Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="/">Home</a></li>
            <li class="current">Courses</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Courses Section -->
    <section id="courses" class="courses section">

      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <a href="course-details">
            <div class="course-item">
              <img src="assets/img/720x520.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Major In Programming</p>
                  <p class="price">Free Tuition</p>
                </div>

                <h3>Bachelor of Science in Information Technology | BSIT</h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="instructor d-flex justify-content-between align-items-center">
                  <!-- <div class="instructor-profile d-flex align-items-center">
                    <img src="assets/img/instructors/instructor-1-2.jpg" class="img-fluid" alt="">
                    <a href="instructor" class="instructor-link">Manny Pacman</a>
                  </div> -->
                  <div class="instructor-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;500+ Students | Last Semester
                    &nbsp;&nbsp;
                    <!-- <i class="bi bi-heart heart-icon"></i>&nbsp;65 -->
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <a href="course-details">
            <div class="course-item">
              <img src="assets/img/720x520.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Major in Finacial Management</p>
                  <p class="price">Free Tuition</p>
                </div>

                <h3>Bachelor of Science in Business Administration | BSBA</h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="instructor d-flex justify-content-between align-items-center">
                  <!-- <div class="instructor-profile d-flex align-items-center">
                    <img src="assets/img/instructors/instructor-2-2.jpg" class="img-fluid" alt="">
                    <a href="instructor" class="instructor-link">Roa Duterte</a>
                  </div> -->
                  <div class="instructor-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;700+ Students | Last Semester
                    &nbsp;&nbsp;
                    <!-- <i class="bi bi-heart heart-icon"></i>&nbsp;42 -->
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
          <a href="course-details">
            <div class="course-item">
              <img src="assets/img/720x520.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Major In --------</p>
                  <p class="price">Free Tuition</p>
                </div>

                <h3>Bachelor of Secondary Education | BSEd</h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="instructor d-flex justify-content-between align-items-center">
                  <!-- <div class="instructor-profile d-flex align-items-center">
                    <img src="assets/img/instructors/instructor-3-2.jpg" class="img-fluid" alt="">
                    <a href="instructor" class="instructor-link">Bongbong Marcos</a>
                  </div> -->
                  <div class="instructor-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;200+ Students | Last Semester
                    &nbsp;&nbsp;
                    <!-- <i class="bi bi-heart heart-icon"></i>&nbsp;85 -->
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
          <a href="course-details">
            <div class="course-item">
              <img src="assets/img/720x520.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Major In ------</p>
                  <p class="price">Free Tuition</p>
                </div>

                <h3>Bachelor of Elementary Education | BEEd</h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="instructor d-flex justify-content-between align-items-center">
                  <!-- <div class="instructor-profile d-flex align-items-center">
                    <img src="assets/img/instructors/instructor-1-2.jpg" class="img-fluid" alt="">
                    <a href="instructor" class="instructor-link">Leni Robrido</a>
                  </div> -->
                  <div class="instructor-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;800+ Students | Last Semester
                    &nbsp;&nbsp;
                    <!-- <i class="bi bi-heart heart-icon"></i>&nbsp;65 -->
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
          <a href="course-details">
            <div class="course-item">
              <img src="assets/img/720x520.png" class="img-fluid" alt="...">
              <div class="course-content">
                <div class="d-flex justify-content-between align-items-center mb-3">
                  <p class="category">Major in -------</p>
                  <p class="price">Free Tuition</p>
                </div>

                <h3>Bachelor of Science in Hospitality Management | BSHM</h3>
                <p class="description">Et architecto provident deleniti facere repellat nobis iste. Id facere quia quae dolores dolorem tempore.</p>
                <div class="instructor d-flex justify-content-between align-items-center">
                  <!-- <div class="instructor-profile d-flex align-items-center">
                    <img src="assets/img/instructors/instructor-2-2.jpg" class="img-fluid" alt="">
                    <a href="instructor" class="instructor-link">Inday Sara</a>
                  </div> -->
                  <div class="instructor-rank d-flex align-items-center">
                    <i class="bi bi-person user-icon"></i>&nbsp;900+ Students | Last Semester
                    &nbsp;&nbsp;
                    <!-- <i class="bi bi-heart heart-icon"></i>&nbsp;42 -->
                  </div>
                </div>
              </div>
            </div>
          </a>
          </div> <!-- End Course Item-->

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="course-item course-bg" style="background-image: url('assets/img/720x520.png');">
                <div class="course-content-soon text-center">
                <h3 class="text-white">More Courses to Offer Soon</h3>
                <p class="description text-white">Stay tuned for upcoming programs and opportunities.</p>
                </div>
            </div>
          </div> <!-- End Course Item-->

        </div>
      </div>

    </section><!-- /Courses Section -->

  </main>

@endsection
