<!DOCTYPE html>
<html>
<head>
    <title>DOUMEVI - Contact Public</title>
</head>
<body style="font-family: Arial, sans-serif; background-color: #f8f8f8; margin: 0; padding: 0;">
    <div style="max-width: 600px; margin: 30px auto; padding: 20px; background-color: #fff; border-radius: 8px;">
        <h2 style="text-align: center; color: #013F59;">📬 Nouveau message via le site DOUMEVI</h2>
        <p><strong>Nom :</strong> {{ $name }}</p>
        <p><strong>Email :</strong> <a href="mailto:{{ $email }}">{{ $email }}</a></p>
        <p><strong>Téléphone :</strong> {{ $telephone }}</p>
        <hr>
        <p><strong>Message :</strong></p>
        <p>{{ $messageContent }}</p>
        <p style="text-align: center; font-size: 12px; color: #888;">Cet email a été généré automatiquement depuis le site web DOUMEVI.</p>
    </div>
</body>
</html>
