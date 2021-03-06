<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">



                    <div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">

                        <div class="py-4 px-6">
                            <h1 class="text-2xl font-semibold text-gray-800">{{ $customer->name }}</h1>
                            <p class="py-2 text-lg text-gray-700">{{ $customer->message }}</p>
                            <div class="flex items-center mt-4 text-gray-700">
                                <svg width="24px" height="24px" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2.99946 7.51126C2.09768 8.08885 1.5 9.09963 1.5 10.25V16.25C1.5 19.1495 3.85051 21.5 6.75 21.5H15.75C16.9004 21.5 17.9112 20.9023 18.4887 20.0005L6.75 20C4.67893 20 3 18.3211 3 16.25L2.99946 7.51126ZM18.75 4H7.25C5.51697 4 4.10075 5.35645 4.00514 7.06558L4 7.25V15.75C4 17.483 5.35645 18.8992 7.06558 18.9949L7.25 19H18.75C20.483 19 21.8992 17.6435 21.9949 15.9344L22 15.75V7.25C22 5.51697 20.6435 4.10075 18.9344 4.00514L18.75 4ZM5.5 8.899L12.6507 12.6637C12.8381 12.7623 13.0569 12.7764 13.2532 12.706L13.3493 12.6637L20.5 8.9V15.75C20.5 16.6682 19.7929 17.4212 18.8935 17.4942L18.75 17.5H7.25C6.33183 17.5 5.57881 16.7929 5.5058 15.8935L5.5 15.75V8.899ZM7.25 5.5H18.75C19.6682 5.5 20.4212 6.20711 20.4942 7.10647L20.498 7.206L13 11.1525L5.50057 7.20483C5.52453 6.25921 6.2986 5.5 7.25 5.5Z"
                                        fill="#212121" />
                                </svg>
                                <h1 class="px-2 text-sm">{{ $customer->email }}</h1>
                            </div>
                            <div class="flex items-center mt-4 text-gray-700">
                                <svg class="h-6 w-6 fill-current" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="422.834px"
                                    height="422.835px" viewBox="0 0 422.834 422.835"
                                    style="enable-background:new 0 0 422.834 422.835;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M22.326,40.01c-32.742,49.142-30.772,143.762,29.52,210.93c55.94,62.328,139.393,131.493,140.091,132.058
   c1.788,1.626,44.514,39.838,107.597,39.838c6.102,0,12.298-0.373,18.418-1.109c68.429-8.271,93.512-52.135,102.376-77.543
   c4.58-13.071-3.127-29.289-16.84-35.409l-80.315-35.697c-3.854-1.712-8.463-2.61-13.33-2.61c-9.926,0-19.88,3.682-25.99,9.601
   l-25.312,24.519c-3.758,3.644-10.451,6.091-16.648,6.091c-2.648,0-4.981-0.469-6.731-1.348
   c-17.088-8.568-43.94-25.676-74.875-58.475c-27.454-29.137-40.498-49.104-46.608-60.732c-3.414-6.502,0.153-17.767,5.508-23.112
   l22.52-22.51c9.362-9.362,13.579-26.584,9.591-39.206l-25.322-80.411C122.12,12.651,109.125,0,93.968,0
   C72.969,0.717,43.507,8.224,22.326,40.01z M94.762,14.334c7.239,0.029,15.357,8.004,17.528,14.86l25.322,80.411
   c2.391,7.564-0.44,19.125-6.053,24.748l-22.52,22.51c-9.199,9.199-14.64,27.444-8.061,39.933
   c6.521,12.412,20.301,33.574,48.864,63.887c32.369,34.319,60.76,52.364,78.872,61.458c3.72,1.864,8.281,2.85,13.196,2.85
   c9.964,0,20.157-3.873,26.603-10.117l25.312-24.519c5.049-4.896,17.03-7.057,23.514-4.179l80.315,35.697
   c6.12,2.726,11.437,10.997,9.132,17.566c-7.765,22.261-29.854,60.702-90.547,68.037c-5.546,0.669-11.159,1.004-16.706,1.004
   c-56.887,0-96.476-34.788-98.207-36.328c-0.813-0.669-83.873-69.596-138.809-130.796C8.575,181.257,4.358,92.833,34.26,47.965
   C52.056,21.267,76.976,14.937,94.762,14.334z" />
                                            <path d="M211.462,163.834c-26.239,0-47.583,21.343-47.583,47.583c0,26.238,21.344,47.582,47.583,47.582
   c26.24,0,47.583-21.344,47.583-47.582C259.045,185.178,237.703,163.834,211.462,163.834z M211.462,244.646
   c-18.331,0-33.239-14.917-33.239-33.238c0-18.322,14.908-33.24,33.239-33.24c18.332,0,33.239,14.908,33.239,33.24
   C244.702,229.739,229.794,244.646,211.462,244.646z" />
                                        </g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                                <h1 class="px-2 text-sm">{{ $customer->phone_number }}</h1>
                            </div>
                            <div class="flex items-center mt-4 text-gray-700">
                                {{-- <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                                    <path
                                        d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z" />
                                </svg> --}}

                                <svg class="h-6 w-6 fill-current" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<g>
	<g>
		<path d="M378.182,81.455V46.545h-60.601C309.965,19.712,285.242,0,256,0c-29.241,0-53.965,19.712-61.581,46.545h-60.601v34.909H64
			V512h384V81.455H378.182z M168.727,81.455h58.182V64c0-16.041,13.05-29.091,29.091-29.091S285.091,47.959,285.091,64v17.455
			h58.182v34.909H168.727V81.455z M413.091,477.091H98.909V116.364h34.909v34.909h244.364v-34.909h34.909V477.091z"/>
	</g>
</g>
<g>
	<g>
		<path d="M290.91,296.727h-17.456v-34.909h17.456c9.991,0,19.778,1.67,29.092,4.962l11.636-32.912
			c-13.062-4.617-26.764-6.959-40.728-6.959h-17.456v-29.091h-34.909v29.091h-17.453c-28.873,0-52.364,23.49-52.364,52.364
			c0,28.873,23.49,52.364,52.364,52.364h17.453v34.909h-17.453c-9.991,0-19.779-1.67-29.093-4.962l-11.635,32.912
			c13.061,4.617,26.764,6.959,40.728,6.959h17.453v29.091h34.909v-29.091h17.456c28.874,0,52.364-23.49,52.364-52.364
			C343.274,320.218,319.785,296.727,290.91,296.727z M238.545,296.727h-17.453c-9.624,0-17.455-7.83-17.455-17.455
			c0-9.624,7.83-17.455,17.455-17.455h17.453V296.727z M290.91,366.545h-17.456v-34.909h17.456c9.624,0,17.455,7.83,17.455,17.455
			C308.365,358.715,300.535,366.545,290.91,366.545z"/>
	</g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
<g>
</g>
</svg>
                                <h1 class="px-2 text-sm">{{ $customer->budget }}</h1>
                            </div>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </div>
</x-app-layout>
