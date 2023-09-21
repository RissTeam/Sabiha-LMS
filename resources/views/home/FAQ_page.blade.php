<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SABIHA || ABDULKADER_LMS</title>

    <!-- ===================FONTAWSOME  FILE LINK================== -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
      integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- ===================BOOTSTRAP CSS FILE LINK================== -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    />
    <!-- ===================  CUSTOME FILE LINK START HERE================== -->
    <link rel="stylesheet" href="{{url('home./css/style.css')}}" />
    <link rel="stylesheet" href="{{url('home./css/faq-page.css')}}" />
  </head>
  <body>
@include('home.layout.header')


    <!-- ===================  MAIN HEADER SECTION START HERE================== -->
    <div class="container-fluid faq-page-bg">
      <div class="row p-0">
        <div class="col-md-12">
          <div class="faq-page-header-content">
            <h1>FAQs</h1>
          </div>
        </div>
      </div>
    </div>
    <!-- ===================  MAIN HEADER SECTION END HERE================== -->
    <!-- ======= Frequently Asked Questions Section ======= -->
 
    <div class="container-fluid faq-container">
        <div class="row faq p-0" id="faq">
            <div class="col-md-12 faq-bg">
              <div class="faq-list">
                <ul>
                  <li>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#faq-list-1"
                    >
                      Is it possible for me to use my local currency for
                      payment? (I don't have a US dollar account)
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i>
                      <i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-1"
                      class="collapse show"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Upon selecting the payment icon, the bank will deduct
                        from your account in your local currency an amount that
                        corresponds to the displayed dollar price on the
                        website, using the prevailing exchange rate.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-2"
                      class="collapsed"
                    >
                      Is there an option to pay the fees in installments?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-2"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        The course fees must be paid all at once; installment
                        payments are not accepted.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-3"
                      class="collapsed"
                    >
                      Who provides the courses?<i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-3"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Currently, the website only features courses prepared
                        and posted by Sabiha Abdulkader.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-4"
                      class="collapsed"
                    >
                      In which languages are the courses available?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-4"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Currently, the courses are offered in Arabic. However,
                        all video courses have been translated into English.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-5"
                      class="collapsed"
                    >
                      Will I get a certificate after completing the course?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-5"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Currently, certificates are not provided for the
                        courses. We may consider introducing certificates for
                        specific courses in the future.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-6"
                      class="collapsed"
                    >
                      Are discounts available for individuals who are not
                      employed?<i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-6"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        We offer free content across our social media platforms
                        and website. By utilizing the information and exercises
                        from our free resources, you'll have the opportunity to
                        engage in work and access all of our training courses.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-7"
                      class="collapsed"
                      >Will my life change after participating in the course?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-7"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        If the provided information and exercises are diligently
                        applied, progress will gradually become evident.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-8"
                      class="collapsed"
                      >Can you help me with my problem?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-8"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        In our coaching sessions, we explore your thoughts and
                        feelings to find out what's causing the issue. We give
                        you exercises, info, and courses to help you understand
                        yourself better. When you use these tools, you can make
                        your life better.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-9"
                      class="collapsed"
                      >Am I allowed to share the password with my friend or
                      girlfriend?<i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-9"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        Subscribing grants one-person access to view the courses
                        for personal use. If you want your friends to benefit,
                        please suggest the course to them.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#faq-list-10"
                      class="collapsed"
                      >. Is it possible to access my paid course whenever I
                      want?
                      <i
                        class="fa fa-sm fa-angle-right icon-show"
                        aria-hidden="true"
                      ></i
                      ><i class="fa fa-sm fa-angle-down icon-close"></i
                    ></a>
                    <div
                      id="faq-list-10"
                      class="collapse"
                      data-bs-parent=".faq-list"
                    >
                      <p>
                        You can view all paid and free courses on the website
                        through your user dashboard at any time. Each paid
                        course comes with a lifetime guarantee of access.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
        </div>
    </div>

    <!-- ======= Frequently Asked Questions Section ======= -->

@include('home.layout.footer')
   