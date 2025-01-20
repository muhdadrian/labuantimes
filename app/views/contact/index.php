<h1 class="contact-header">Contact Form</h1>

<div class="container contact-form">
<form action="send_email.php" method="POST" class="form">
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" id="name" placeholder="Your full name">
  </div>
  
  <div class="mb-3">
    <label for="subject" class="form-label">Subject</label>
    <input type="text" class="form-control" id="subject" placeholder="Your subject">
  </div>
  
  <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
  </div>
  
  
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Please enter your message" rows="3"></textarea>
  </div>
  
      <div class="contact-form-btn d-flex justify-content-center gap-2">
      <button class="btn btn-primary" type="submit">Submit</button>
      <button class="btn btn-secondary" type="reset">Reset</button>
    </div>
  <!-- <div class="contact-form-btn text-center">
  <div class="d-inline-block">
    <button class="btn btn-primary me-2" type="submit">Submit</button>
  </div>
  <div class="d-inline-block">
    <button class="btn btn-primary" type="reset">Reset</button>
  </div>
</div> -->

  </form>
</div>


<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action list-group-item-light text-center response">If there's no response from us within three days, please email directly to labuantimes@gmail.com. Thank you.</a>
</div>