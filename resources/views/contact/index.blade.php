@extends('layouts.wrapper', ['title' => 'Contacts'])

@section('content')
    <div class="container-lg mt-5">

        <!-- Contact Info Card -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="p-3 p-md-3 rounded text-body-emphasis bg-body-secondary">
                    <div class="card-body p-5">
                        <!-- Header -->
                        <div class="text-center mb-5">
                            <h2 style="font-family: 'Playfair Display', serif;">Contacts</h2>
                        </div>

                        <!-- Email -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-envelope fs-4 text-muted"></i>
                            <p class="mb-0"><a href="mailto:mail@gmail.com" class="text-decoration-none">mail@gmail.com</a>
                            </p>
                        </div>

                        <!-- Telegram -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-telegram fs-4 text-muted"></i>
                            <p class="mb-0"><a href="#" class="text-decoration-none">Telegram</a></p>
                        </div>

                        <!-- VK -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-people fs-4 text-muted"></i>
                            <p class="mb-0"><a href="#" class="text-decoration-none">VK</a></p>
                        </div>

                        <!-- WhatsApp -->
                        <div class="d-flex align-items-center gap-3 mb-4">
                            <i class="bi bi-whatsapp fs-4 text-muted"></i>
                            <p class="mb-0"><a href="#" class="text-decoration-none">WhatsApp</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection