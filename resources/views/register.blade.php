<x-layoutLR title="Blog - Register" titleName="Register">
    <form method="POST" action="{{route('user.register_action')}}">
        @csrf

        <x-forms.text-input
            name="name"
            label="Seu nome"
            placeholder='Seu nome'
        />

        <x-forms.text-input
            type="email"
            name="email"
            label="Seu email"
            placeholder="Seu email"
        />

        <x-forms.text-input
            type="password"
            name="password"
            label="Sua senha"
            placeholder="Sua senha"
        />

        <x-forms.text-input
            type="password"
            name="password_confirmation"
            label="Confirme sua senha"
            placeholder="Confirme sua senha"
        />
        <div class="button_forms_create">
            <x-buttons.button type='reset'>Limpar</x-buttons.button>
            <x-buttons.button type='submit'>Registrar</x-buttons.button>
        </div>

        <div class="alert">
            <a  href="/login">Se você já tem conta, clique aqui!</a>
        </div>
    </form>
</x-layoutLR>
