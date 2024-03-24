    <div class="loading col-span-2 border-r-2 md:pr-3 md:mr-3">
        @for ($i = 0; $i < 5; $i++)
            <div class="mb-5 animate-pulse bg-white rounded-lg grid grid-cols-3 gap-4 overflow-hidden">
                <div class=" bg-slate-500 col-span-1 h-44"></div>
                <div class="col-span-2 relative">
                    <div class="space-y-3">
                        <div class=" flex items-end gap-3">
                            <div class=" h-8 w-8  mt-3 bg-slate-500 rounded-full"></div>

                            <div class=" h-2 w-16  mt-3 bg-slate-500 rounded"></div>
                        </div>

                        <div class=" h-2 w-24   bg-slate-500 rounded"></div>

                        <div class=" grid grid-cols-3 gap-4">
                            <div class="h-2 bg-slate-500 rounded col-span-2"></div>
                            <div class="h-2 bg-slate-500 rounded col-span-1"></div>
                            <div class="h-2 bg-slate-500 rounded col-span-1"></div>
                            <div class="h-2 bg-slate-500 rounded col-span-2"></div>
                        </div>
                    </div>

                    <div class=" absolute bottom-2 ">
                        <div class=" flex gap-3">
                            <div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div>
                            <div class=" h-6 w-16  mt-3 bg-slate-500 rounded "></div>
                        </div>
                    </div>
                </div>
            </div>
        @endfor
    </div>
