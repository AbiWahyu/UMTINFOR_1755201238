<h4 class="text-center">Menu</h4>

<div class="list-group list-group-flush">
<a href="/mahasiswa" class="list-group-item list-group-item-action 
{{ (request()->is('mahasiswa')) ? 'active' : '' }}">Mahasiswa</a>
  <a href="#" class="list-group-item list-group-item-action">Dosen</a>
  <a href="/prodi" class="list-group-item list-group-item-action {{
(request()->is('prodi')) ? 'active' : '' }}">Program Studi</a>
</div>
