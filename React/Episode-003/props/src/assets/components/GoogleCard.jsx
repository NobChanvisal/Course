function GoogleCard({ icon, link, title }) {
  return (
    <a className="card flex flex-col items-center justify-center w-28 h-28 bg-slate-200 hover:bg-slate-300 rounded-md" href={link}>
      <div className="profile flex items-center justify-center rounded-full w-12 h-12 bg-slate-500">
        <img className="icon w-6 h-6 " src={icon} alt={title} />
      </div>
      <p className="title pt-3 font-semibold">{title}</p>
    </a>
  );
}
export default GoogleCard;
