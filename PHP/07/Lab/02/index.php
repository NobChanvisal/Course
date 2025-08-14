<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>contact form</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

  </head>
  <body class=" bg-slate-100">
    <div class="m-5 p-4 mx-auto max-w-xl bg-white shadow rounded">
      <h2 class="text-3xl text-slate-900 font-bold">Contact us</h2>
      <form class="mt-8 space-y-5" action="./viewdata.php" method="POST">
        <div>
          <label class="text-sm text-slate-900 font-medium mb-2 block"
            >Name</label
          >
          <input
            type="text"
            name="username"
            placeholder="Enter Name"
            class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
          />
        </div>
        <div>
          <label class="text-sm text-slate-900 font-medium mb-2 block"
            >Email</label
          >
          <input
            type="email"
            name="email"
            placeholder="Enter Email"
            class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
          />
        </div>
        <div>
          <label class="text-sm text-slate-900 font-medium mb-2 block"
            >Subject</label
          >
          <input
            type="text"
            name="subject"
            placeholder="Enter Subject"
            class="w-full py-2.5 px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm outline-0 transition-all"
          />
        </div>
        <div>
          <label class="text-sm text-slate-900 font-medium mb-2 block"
            >Message</label
          >
          <textarea
            name="message"
            placeholder="Enter Message"
            rows="6"
            class="w-full px-4 text-slate-800 bg-gray-100 border border-gray-200 focus:border-slate-900 focus:bg-transparent text-sm pt-3 outline-0 transition-all"
          ></textarea>
        </div>
        <input
          type="submit"
          value="Send message"
          class="text-white bg-slate-900 font-medium hover:bg-slate-800 tracking-wide text-sm px-4 py-2.5 w-full border-0 outline-0 cursor-pointer"
        />
          
        
      </form>
    </div>
  </body>
</html>
