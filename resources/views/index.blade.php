<x-guest-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- Accent goes here --}}
                    <p class="text-center mb-2 text-sm font-semibold text-gray-500">Accent</p>
                    <div class="grid grid-cols-4">
                        <div class="mx-auto">
                            <div class="border rounded border-gray-300" style="width: 35px; height: 35px;"></div>
                        </div>
                        <div class="mx-auto">
                            <div class="border rounded border-gray-300" style="width: 35px; height: 35px;"></div>
                        </div>
                        <div class="mx-auto">
                            <div class="border rounded border-gray-300" style="width: 35px; height: 35px;"></div>
                        </div>
                        <div class="mx-auto">
                            <div class="border rounded border-gray-300" style="width: 35px; height: 35px;"></div>
                        </div>
                    </div>

                    <hr class="my-6">

                    <div class="grid grid-cols-3">
                        {{-- Time Signature --}}
                        <div>
                            <p class="text-sm block font-semibold text-gray-500 mb-2">Time Signature</p>
                            <div class="flex items-center">
                                <div>
                                    <label for="time-signature-l" class="sr-only">Beats in a bar</label>
                                    <select name="time-signature-l" id="time-signature-l"
                                            class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="4">4</option>
                                    </select>
                                </div>
                                <p class="px-2">/</p>
                                <div>
                                    <label for="time-signature-r" class="sr-only">Bar length</label>
                                    <select name="time-signature-r" id="time-signature-r"
                                            class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                        <option value="4">4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        {{-- Subdivisons --}}
                        <div>
                            <div x-data="{ subdivision: noteResolution }">
                                <label for="subdivision" class="text-sm block font-semibold text-gray-500 mb-2">Subdivision</label>
                                <select name="subdivision" id="subdivision"
                                        class="relative w-full bg-white border border-gray-300 rounded-md shadow-sm pl-3 pr-10 py-2 text-left cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        x-model="subdivision"
                                        @change="console.log(subdivision);noteResolution = parseFloat(subdivision);">
                                    <option value="2">4</option>
                                    <option value="1">8</option>
                                    <option value="0">16</option>
                                </select>
                            </div>
                        </div>
                        {{-- Length --}}
                    </div>

                    <hr class="my-6">

                    {{-- Tempo --}}
                    <div>
                        <div x-data="{ bpm: 60 }">
                            <label for="tempo" class="sr-only">Tempo</label>
                            <input id="tempo" name="tempo" type="range" min="20" max="400" value="60" class="w-full"
                                   x-model="bpm">
                            <div class="text-center mt-4">
                                <p id="tempo-label" class="text-5xl font-black" x-text="bpm"></p>
                                <p class="text-3xl font-semibold text-gray-400">BPM</p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button id="btn-start" type="button" class="mr-4 bg-blue-500 font-medium text-white px-3 py-1 rounded">Start</button>
                    </div>

                    <hr class="my-6">

                    <div id="canvas-container" style="width: 100%"></div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
