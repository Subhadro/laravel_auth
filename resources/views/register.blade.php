
<div class="register-container h-screen">
    <h2 class="register-title">Create Account</h2>
    <form method="POST" action="registerSave">
        @csrf
        <div class="form-group">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-input" value="{{ old('name') }}" required>
        </div>
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-input" required>
        </div>
        <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-input" required>
        </div>
        <button type="submit" class="btn-register">Register</button>
    </form>
</div>

<style>
.h-screen{
    min-height: 100vh;
}

.register-container {
    max-width: 400px;
    margin: 50px auto;
    background: white;
    padding: 40px;
    border-radius: 15px;
    font-family: 'Segoe UI', sans-serif;
}
.register-title {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
    font-size: 28px;
    font-weight: 600;
}
.form-group {
    margin-bottom: 20px;
}
.form-label {
    display: block;
    margin-bottom: 8px;
    color: #555;
    font-weight: 500;
}
.form-input {
    width: 100%;
    padding: 15px;
    border: 2px solid #e1e5e9;
    border-radius: 10px;
    font-size: 16px;
    box-sizing: border-box;
}
.form-input:focus {
    outline: none;
    border-color: #4f46e5;
}
.btn-register {
    width: 100%;
    padding: 15px;
    color: white;
    border: none;
    border-radius: 10px;
    font-size: 16px;
    font-weight: 600;
    cursor: pointer;
		background-color: rgb(86, 81, 81);
		color: white;
}
</style>

