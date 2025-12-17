

<style>
    .message-card {
        border: 1px solid #ccc;
        padding: 16px;
        border-radius: 8px;
        max-width: 400px;
        margin: 20px auto;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }
    .message-card h3 {
        margin-top: 0;
        color: #333;
    }
    .message-card .message-content {
        font-size: 16px;
        color: #555;
    }
    .message-card .foot {
        text-align: right;
        font-size: 14px;
        color: #999;
    }
</style>

<div class="message-card">
    <h3>{{ $title }}</h3>
    <hr>
    <p class="message-content">{{ $message }}</p>
    <hr>
    <p class="foot">{{$footer}}</p>
</div>