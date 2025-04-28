<div>
    <form wire:submit="saveMessage" method="POST" class="contact-form d-flex flex-column justify-content-between p-5">
        @csrf
        <input wire:model="name" type="text" name="name" class="contact-form-input my-2" placeholder="Name">
        @error('name')
            <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
        @enderror
        <input wire:model="email" type="text" name="email" class="contact-form-input my-2" placeholder="Email">
        @error('email')
            <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
        @enderror
        <textarea wire:model="message" name="message" id="" class="contact-form-input my-2"
            placeholder="What are your web development needs?"></textarea>
        @error('message')
            <p class="m-0 small alert alert-danger sahadow-sm">{{ $message }}</p>
        @enderror
        <button type="submit" class="">
            Send Message
        </button>
    </form>
</div>
