@props(['disabled' => false])
<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'form-control w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50']) !!}></textarea>
