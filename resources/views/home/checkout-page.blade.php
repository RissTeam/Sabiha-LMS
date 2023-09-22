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
    <!-- ===================  CUSTOME FILE LINK START HERE================== -->
    <link rel="stylesheet" href="{{url('home././css/style.css')}}" />
    <link rel="stylesheet" href="{{url('home././css/checkout-page.css')}}">
  </head>
  <body>
    <!-- ===================  NAVBAR START HERE================== -->
@include('home.layout.header')
  
    <!-- ===================  NAVBAR END HERE================== -->
<!-- =================MY CART SECTION START HERE========= -->


<div class="container-fluid checkout-cart-container">
  <div class="container">
    <div class="row">
      <div class="col-md-12 cart-section">
        <h1>My Cart</h1>
      </div>
    </div>
    <!-- CART TABLE -->
    <div class="row">
      <div class="col-md-8">
        <div class="table-border table-responsive">
          <table class="table ">
            <thead>
              <tr class="product-class">
                <th class="">Image</th>
                <th class="product">Product Name</th>
                <th class="text-center">Price</th>
                <th class="text-center">Quantity</th>
                <th class="text-center">Total</th>
                <th class="text-center">Remove</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td><img src="./imgs/table1.png " alt="" /></td>
                <td class="">The Atlantic World</td>
                <td class="text-center">$30.00</td>
                <td class="text-center">1</td>
                <td class="text-center">$30.00</td>
                <td class="text-center">
                  <i class="fa fa-trash-can"></i>
                </td>
              </tr>
              <!--  -->
              <tr>
                <td><img src="./imgs/table2.png " alt="" /></td>
                <td class="">Modern World History</td>
                <td class="text-center">$60.00</td>
                <td class="text-center">1</td>
                <td class="text-center">$60.00</td>
                <td class="text-center">
                  <i class="fa fa-trash-can"></i>
                </td>
              </tr>
              <!--  -->
              <tr>
                <td><img src="./imgs/table3 .png " alt="" /></td>
                <td class="">The Atlantic World</td>
                <td class="text-center">$70.00</td>
                <td class="text-center">1</td>
                <td class="text-center">$70.00</td>
                <td class="text-center">
                  <i class="fa fa-trash-can"></i>
                </td>
              </tr>
              <tr>
              </tr>
            </tbody>
          </table>
          <div class="table-btn">
            <button  class="float-end"><a href="./review-your-order-page.html">Update Cart</a></button>

            <!-- <button class="float-end">Update Cart</button> -->
          </div>
        </div>
      </div>

      <div class="col-md-4 my-cart-crd">
        <div class="cart-card">
          <div class="cart-cardbody">
            <h3>Subtotal <span class="float-end">$160.00</span></h3>

            <div class="input-section pb-3">
              <p class="mb-0 pt-3">Enter Discount Code</p>
              <div class="input-group mb-3">
                <input
                  type="text"
                  class="form-control"
                  placeholder="FLAT50"
                  aria-label="Recipient's username"
                  aria-describedby="button-addon2"
                />
                <button
                  class="btn btn-outline-secondary"
                  type="button"
                  id="button-addon2"
                >
                  Apply
                </button>
              </div>
            </div>
            <h4>TAX <span class="float-end">$5.00</span></h4>

            <h2>Grand Total <span class="float-end">$165.00</span></h2>
            <div class="cart-card-btn">
              <button><a href="./payment-method-page.html">Proceed to Checkout</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
<!-- =================MY CART SECTION END HERE========= -->

 


 
@include('home.layout.footer')
