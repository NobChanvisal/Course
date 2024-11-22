function ServiceList() {
  const CardData = [
    {
      id: "1",
      img: "https://static.wixstatic.com/media/353803_55a0c3ce96eb44e4a049d3c7b8e5888b~mv2.jpg/v1/fill/w_640,h_320,al_c,lg_1,q_80,enc_auto/353803_55a0c3ce96eb44e4a049d3c7b8e5888b~mv2.jpg",
      course: "Basic C++ programming ",
      des: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. oluptatibus quia, nulla! Maiores et perferendis eaque,exercitationem praesentium nihil.",
      profile: "https://tailwindcss.com/img/jonathan.jpg",
      teacher: "Jonathan Reinink",
      date: "Aug 18"
    },
    {
      id: "2",
      img: "https://d1le3ohiuslpz1.cloudfront.net/skillcrush/wp-content/uploads/2022/05/15-essential-front-end-developer-skills1.png",
      course: "Front End developer for begining",
      des: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. oluptatibus quia, nulla! Maiores et perferendis eaque,exercitationem praesentium nihil.",
      profile: "https://i.pinimg.com/564x/d0/1c/c2/d01cc2e19fa5eb1cf47aa4adc9830f11.jpg",
      teacher: "Jonh Rick",
      date: "Sep 20"
    },
    {
        id: "3",
        img: "https://i.pinimg.com/564x/42/da/db/42dadbfe747110c544fab569d954869c.jpg",
        course: "Learn Figma - Top Free Figma Courses 2023",
        des: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. oluptatibus quia, nulla! Maiores et perferendis eaque,exercitationem praesentium nihil.",
        profile: "https://shop.primeeducation.com.au/wp-content/uploads/2015/11/hsc-area-of-study-mind-maps.png",
        teacher: "Just Name",
        date: "May 15"
      },
  ];
  return (
    <section class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-10">
        {CardData.map((card) => (
            <div key={card.id} class="border-r border-b border-l border-gray-400 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">
            <img
              src={card.img}
              class="w-full mb-3 h-[200px] object-cover"
            />
            <div class="p-4 pt-2 text-start">
              <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                  <svg
                    class="fill-current text-gray-500 w-3 h-3 mr-2"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                  >
                    <path d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z"></path>
                  </svg>
                  Members only
                </p>
                <a
                  href="#"
                  class="text-gray-900 font-bold text-lg mb-2 hover:text-indigo-600 line-clamp-1"
                >
                  {card.course}
                </a>
                <p class="text-gray-700 text-sm line-clamp-3">
                  {card.des}
                </p>
              </div>
              <div class="flex items-center">
                <a href="#">
                  <img
                    class="w-10 h-10 rounded-full mr-4 object-contain border border-indigo-600"
                    src={card.profile}
                    alt="Avatar of Jonathan Reinink"
                  />
                </a>
                <div class="text-sm">
                  <a
                    href="#"
                    class="text-gray-900 font-semibold leading-none hover:text-indigo-600"
                  >
                    {card.teacher}
                  </a>
                  <p class="text-gray-600">{card.date}</p>
                </div>
              </div>
            </div>
          </div>
        ))
        }
      
    </section>
  );
}
export default ServiceList;
