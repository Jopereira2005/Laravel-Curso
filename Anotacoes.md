# Anotações
## Blade

### Variáveis
Podem ser passados pelo route, $variavel.
{{ $variavel }} <- Para colocar no HTML

### Comentário 
O comentário só aparece no blade
{{-- Bla --}}

### If

@if (condição)
  code
@else
  code
@endif

### For
@for ($i=0; $i < 1; $i++)
  code
@endfor

### ForEach
@foreach ($arr as $elemento)
  code
@endforeach