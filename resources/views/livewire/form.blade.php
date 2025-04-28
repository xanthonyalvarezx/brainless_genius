    <form wire:submit="messages"  method="POST" class="contact-form d-flex flex-column justify-content-between p-5">
        @csrf
        <input wire:model="name" type="text" name="name" class="contact-form-input my-2" placeholder="Name">
        <input wire:model="email" type="text" name="email" class="contact-form-input my-2" placeholder="Email">
        <textarea wire:model="message" name="webDevNeeds" id="" class="contact-form-input my-2"  placeholder="What are your web development needs?"></textarea>
        <button type="submit" class="">
            Send Message
        </button>
    </form>