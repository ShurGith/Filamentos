<table class="min-w-full table-auto border-collapse border border-gray-200">
  <thead class="bg-gray-100">
  <tr>
    <th class="border border-gray-300 px-4 py-2 text-left">Name</th>
    <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
    <th class="border border-gray-300 px-4 py-2 text-left">Created At</th>
    <th class="border border-gray-300 px-4 py-2 text-left">Actions</th>
  </tr>
  </thead>
  <tbody>
  @foreach ($users as $user)
    <tr class="hover:bg-gray-50">
      <td class="border border-gray-300 px-4 py-2">{{ $user->name }}</td>
      <td class="border border-gray-300 px-4 py-2">{{ $user->email }}</td>
      <td class="border border-gray-300 px-4 py-2">{{ $user->created_at->format('Y-m-d') }}</td>
      <td class="border border-gray-300 px-4 py-2">
        <div class="flex space-x-2">
          <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
            Edit
          </button>
          <button class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-300">
            Delete
          </button>
        </div>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
