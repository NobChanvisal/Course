<x-app title="Home page">
    <x-alert type="error">
        This is a error alert message!
    </x-alert>
    <x-alert type="success">
        This is a success alert message!
    </x-alert>

    <x-message 
        title="Welcome to Our Store" 
        message="Discover a wide range of products tailored to your needs. Enjoy exclusive deals and offers available only for a limited time!" 
        footer="Happy Shopping!"
    />

    <x-message>
        <x-slot name="title">Important Update</x-slot>
        <x-slot name="message">
            We have updated our privacy policy. Please review the changes to stay informed about how we handle your data.
        </x-slot>
        <x-slot name="footer">Thank you for your attention.</x-slot>
    </x-message>
</x-app>