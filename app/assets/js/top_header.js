(() => {
  const hamb = document.getElementById("hambBtn");
  const panel = document.getElementById("navPanel");
  if (!hamb || !panel) return;

  const open = () => {
    panel.classList.add("is-open");
    panel.setAttribute("aria-hidden", "false");
    hamb.setAttribute("aria-expanded", "true");
    document.documentElement.style.overflow = "hidden";
    document.body.classList.add("no-scroll");
  };

  const close = () => {
    panel.classList.remove("is-open");
    panel.setAttribute("aria-hidden", "true");
    hamb.setAttribute("aria-expanded", "false");
    document.documentElement.style.overflow = "";
    document.body.classList.remove("no-scroll");
  };

  hamb.addEventListener("click", open);

  panel.addEventListener("click", (e) => {
    const t = e.target;

    if (t?.dataset?.close === "1") close();
    if (t?.closest?.('[data-close="1"]')) close();
    if (t?.tagName === "A") close();
  });

  window.addEventListener("keydown", (e) => {
    if (e.key === "Escape") close();
  });

  window.addEventListener("resize", () => {
    if (window.innerWidth > 980) close();
  });
})();
