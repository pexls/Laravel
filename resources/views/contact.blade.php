@include('navbar')

    <link rel="stylesheet" href="css/contact.css">

    <div class="contact">
        <form>
            <h1>Contact Us Form</h1>
            <input type="text" id="firstName" placeholder="First Name" required>
            <input type="text" id="lastName" placeholder="Last Name" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="text" id="mobile" placeholder="Mobile" required>
            <h4>Type Your Message Here...</h4>
            <textarea required></textarea>
            <input type="submit" value="Send" id="button">
        </form>
    </div>


@include('footer')
