<div class="{{ $notificationType }}">

    <div class="notification_icon {{ $notificationType }}_icon">
        <i class="fa-solid {{ $notificationIcon }} fa-xl"></i>
    </div>

    <div class="notification_text">
        {{ $slot }}
    </div>
</div>