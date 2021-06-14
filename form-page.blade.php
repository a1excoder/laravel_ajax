<div id="form-errors"></div>

<form id="formId">
    @csrf

    <input type="text" placeholder="First name" id="name" name="firstName" class="inputForm"><br>
    <input type="text" placeholder="Last name" id="lastName" name="lastName" class="inputForm"><br>
    <input type="email" placeholder="E-mail" name="email" id="email" class="inputForm"><br>
    <input type="text" placeholder="Phone number" name="phoneNumber" id="phone" class="inputForm"><br>
    <input type="submit" id="btn" onclick="sendForm()" value="Send">
</form>
