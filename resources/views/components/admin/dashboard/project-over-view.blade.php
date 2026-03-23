@props(['projects'])

<div class="lg:col-span-8 bg-white rounded-[2.5rem] border border-slate-100 shadow-sm overflow-hidden">
    <div class="px-8 py-6 border-b border-slate-50 flex justify-between items-center">
        <h4 class="font-black text-slate-900">Recent Projects</h4>
        <a href="#" class="text-xs font-bold text-lime-600 hover:underline">View All</a>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full text-left">
            <thead class="bg-slate-50 text-[10px] uppercase font-bold text-slate-400">
                <tr>
                    <th class="px-8 py-4">Project Name</th>
                    <th class="px-8 py-4">Category</th>
                    <th class="px-8 py-4">Year</th>
                    <th class="px-8 py-4">Action</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-50">
                @foreach($projects as $p)
                <tr class="hover:bg-slate-50/50 transition-colors">
                    <td class="px-8 py-4 font-bold text-slate-700 text-sm">{{ $p->nama_project }}</td>
                    <td class="px-8 py-4"><span class="px-3 py-1 bg-slate-100 rounded-full text-[10px] font-bold text-slate-500">{{ $p->jenis }}</span></td>
                    <td class="px-8 py-4 text-sm text-slate-500">{{ $p->tahun }}</td>
                    <td class="px-8 py-4">
                        <a href="#" class="text-lime-600 hover:text-lime-700 text-xs font-bold">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>