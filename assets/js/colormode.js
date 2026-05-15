(() => {
  'use strict';

  const storageKey = 'bnwp-theme';

  const getStoredTheme = () => localStorage.getItem(storageKey);

  const setStoredTheme = theme => {
    localStorage.setItem(storageKey, theme);
  };

  const prefersDark = () => {
    return window.matchMedia('(prefers-color-scheme: dark)').matches;
  };

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme();

    if (storedTheme === 'light' || storedTheme === 'dark') {
      return storedTheme;
    }

    return prefersDark() ? 'dark' : 'light';
  };

  const setTheme = theme => {
    document.documentElement.setAttribute('data-bs-theme', theme);
  };

  const updateButtonIcon = theme => {
    const icon = document.querySelector('#theme-icon-active');
    const button = document.querySelector('#colorModeTooglerBtn');

    if (!icon || !button) return;

    if (theme === 'dark') {
      icon.className = 'bi-moon';
      button.setAttribute('aria-label', 'Switch to light mode');
      button.setAttribute('title', 'Switch to light mode');
    } else {
      icon.className = 'bi-sun';
      button.setAttribute('aria-label', 'Switch to dark mode');
      button.setAttribute('title', 'Switch to dark mode');
    }
  };

  const applyTheme = theme => {
    setTheme(theme);
    updateButtonIcon(theme);
  };

  applyTheme(getPreferredTheme());

  window.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('#colorModeTooglerBtn');

    if (!button) return;

    applyTheme(getPreferredTheme());

    button.addEventListener('click', () => {
      const currentTheme = document.documentElement.getAttribute('data-bs-theme') || 'light';
      const nextTheme = currentTheme === 'dark' ? 'light' : 'dark';

      setStoredTheme(nextTheme);
      applyTheme(nextTheme);
    });
  });
})();