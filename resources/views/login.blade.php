
<div class="login-container h-screen">
    <h2 class="login-title">Login In Your Account</h2>
    <form method="POST" action="loginMatch">
        @csrf
        <div class="form-group">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
            <label class="form-label">Password</label>
            <input type="password" name="password" class="form-input" required>
        </div>
        <button type="submit" class="btn-login">Login</button>
    </form>
</div>

<style>
.h-screen{
    min-height: 100vh;
}

.login-container {
    max-width: 400px;
    margin: 50px auto;
    background: white;
    padding: 40px;
    border-radius: 15px;
    font-family: 'Segoe UI', sans-serif;
}
.login-title {
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
.btn-login {
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

