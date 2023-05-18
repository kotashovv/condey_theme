document.addEventListener('DOMContentLoaded', () => {

	function NoticeForm(text) {
		const notice = document.querySelector('.notice');
		notice.innerText = text;
		notice.classList.add('active');
		setTimeout(() => {
			notice.classList.remove('active');
		}, 2500);
	}

	var form = document.querySelectorAll(".contact-form-name");

	if (form.length != 0) {
		form.forEach(function(form) {
			form.addEventListener("submit", function (event) {
				event.preventDefault(); // Отмена отправки формы по умолчанию
				if (form.classList.contains('main-form')) {
					form.classList.add("waiting");
		
					var formData = new FormData(form);
			
					fetch(form.action, {
							method: form.method,
							body: formData
						})
						.then(function (response) {
							// Удаление класса "waiting" из формы
							form.classList.remove("waiting");
			
							if (response.ok) {
								// Успешная отправка формы
								NoticeForm('Заявка успешно отправлена!')
								form.reset();
							} else {
								// Ошибка отправки формы
								NoticeForm("Возникла ошибка, попробуйте связаться иначе :(");
							}
						})
						.catch(function (error) {
							// Ошибка отправки формы
							console.log("При отправке заявки произошла ошибка.");
							console.error(error);
			
							// Удаление класса "waiting" из формы (в случае ошибки)
							form.classList.remove("waiting");
						});
				} else if (form.classList.contains('small-form')) {
					form.classList.add("waiting");
		
					var formData = new FormData(form);
			
					fetch(form.action, {
							method: form.method,
							body: formData
						})
						.then(function (response) {
							// Удаление класса "waiting" из формы
							form.classList.remove("waiting");
			
							if (response.ok) {
								// Успешная отправка формы
								let noticeWindow = form.closest('.popup__item').querySelector('.popup-notice');
								noticeWindow.classList.add('active');
								setTimeout(() => {
									noticeWindow.classList.remove('active');
								}, 2500);
								form.reset();
							} else {
								// Ошибка отправки формы
								NoticeForm("Возникла ошибка, попробуйте связаться иначе :(");
							}
						})
						.catch(function (error) {
							// Ошибка отправки формы
							console.log("При отправке заявки произошла ошибка.");
							console.error(error);
			
							// Удаление класса "waiting" из формы (в случае ошибки)
							form.classList.remove("waiting");
						});
				}
				
			});
		})
	}

	

	var inputFile = document.getElementById('fileInput');

	if (inputFile) {
		inputFile.addEventListener('change', () => {
			showFileNames();
		})
	}

	function removeFile(index) {
		var input = document.getElementById('fileInput');
		var files = Array.from(input.files);
		files.splice(index, 1);

		var newFileList = new DataTransfer();
		for (var i = 0; i < files.length; i++) {
			newFileList.items.add(files[i]);
		}

		input.files = newFileList.files;
		showFileNames(); // Обновляем список файлов после удаления
	}

	function showFileNames() {

		var files = inputFile.files;
		var fileList = document.querySelector('.filelist');

		fileList.innerHTML = '';

		for (var i = 0; i < files.length; i++) {
			var file = files[i];
			var fileName = file.name;

			// Создаем контейнер для названия файла и кнопки удаления
			var fileContainer = document.createElement('div');

			// Создаем элемент для названия файла
			var fileItem = document.createElement('p');
			fileItem.innerHTML = fileName;

			// Создаем кнопку удаления файла
			var deleteButton = document.createElement('button');

			deleteButton.innerHTML = "";
			deleteButton.setAttribute('data-file', i); // Устанавливаем атрибут для идентификации файла

			// Добавляем обработчик события на кнопку удаления
			deleteButton.addEventListener('click', function (event) {
				event.preventDefault();
				var fileIndex = event.target.getAttribute('data-file');
				removeFile(fileIndex);
			});

			// Добавляем элементы в контейнер и контейнер в список файлов
			fileContainer.appendChild(fileItem);
			fileContainer.appendChild(deleteButton);
			fileList.appendChild(fileContainer);

			// Выполняем дальнейшие операции с загруженным файлом
			// Например, можно отправить файл на сервер с использованием AJAX
			// или выполнить другие необходимые действия
		}
	}

	Fancybox.bind("[data-fancybox]", {});

	const withSublist = document.querySelectorAll('.with-sublist');
	if (withSublist.length != 0) {
		const sublists = document.querySelectorAll('.sublist-menu');
		withSublist.forEach(function (item) {
			item.addEventListener('mouseover', () => {
				item.querySelector('ul.sublist-menu').classList.add('active');
			})
		})
		sublists.forEach(function (item) {
			item.addEventListener('mouseout', () => {
				item.classList.remove('active');
			})
		})
	}

	const ClosePopupBtn = document.querySelectorAll('.close-popup');
	if (ClosePopupBtn.length != 0) {
		ClosePopupBtn.forEach(function (item) {
			item.addEventListener('click', () => {
				ClosePopup();
			})
		})
	}

	const PopupWindow = document.querySelector('.popup');
	const callPopupBtns = document.querySelectorAll('button[data-popup]');

	function OpenPopup(item) {
		CloseMenu();
		let currentPopup = document.querySelector(item);
		PopupWindow.classList.add('active');
		currentPopup.classList.add('active');
		document.body.style.overflow = 'hidden';
		document.addEventListener('click', (e) => {
			if (!e.target.closest('.popup__item') && !e.target.closest('[data-popup]')) {
				ClosePopup();
			}
		})
	}

	function ClosePopup() {
		PopupWindow.classList.remove('active');
		let allPopupItems = document.querySelectorAll('.popup__item');
		allPopupItems.forEach((i) => {
			i.classList.remove('active');
		})
		document.body.style.overflow = 'auto';
	}

	if (callPopupBtns.length != 0) {
		callPopupBtns.forEach(function (item) {
			item.addEventListener('click', (e) => {
				e.preventDefault();
				let currentPopup = e.target.getAttribute('data-popup');
				OpenPopup(currentPopup);
			})
		})

	}

	const burgerBtn = document.querySelector('.burger-btn');
	const mobileMenu = document.querySelector('.header__mobile');

	function OpenMenu() {
		burgerBtn.classList.add('active');
		mobileMenu.classList.add('active');
		document.body.style.overflow = 'hidden';
	}

	function CloseMenu() {
		burgerBtn.classList.remove('active');
		mobileMenu.classList.remove('active');
		document.body.style.overflow = 'auto';
	}
	if (burgerBtn) {
		burgerBtn.addEventListener('click', (e) => {
			if (e.target.classList.contains('active')) {
				CloseMenu();
			} else {
				OpenMenu();

			}
		});



	}

	const faqItems = document.querySelectorAll('.accord-btn');

	if (faqItems.length != 0) {
		faqItems.forEach(function (item) {
			item.addEventListener('click', (e) => {
				let target = e.target;
				if (target.classList.contains('active')) {
					CloseFaq(target);
				} else {
					OpenFaq(target);
				}
			})
		})


		function OpenFaq(i) {
			faqItems.forEach(function (item) {
				item.classList.remove('active');
				item.nextElementSibling.classList.remove('active');
			});
			i.classList.add('active');
			i.nextElementSibling.classList.add('active');
		}

		function CloseFaq(i) {
			faqItems.forEach(function (item) {
				item.classList.remove('active');
				item.nextElementSibling.classList.remove('active');
			});
			i.classList.remove('active');
			i.nextElementSibling.classList.remove('active');
		}
	}

	const mainSlider = new Swiper('.hero__slider', {
		// options
		pagination: {
			el: '.hero-pagination',
			renderBullet: function (index, className) {
				return '<span class="' + className + '">' + '0' + (index + 1) + "</span>";
			},
			clickable: true,
		},
		navigation: {
			nextEl: '.hero-next',
			prevEl: '.hero-prev',
		}

	})

	const reviewSlider = new Swiper('.review__slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			prevEl: '.review-nav .prev-slide',
			nextEl: '.review-nav .next-slide',
		},
		pagination: {
			el: '.review-pagination',
			dynamicBullets: true,
		},
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 10,

			},
			560: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		}
	})

	const partSlider = new Swiper('.partners__slider', {
		navigation: {
			prevEl: '.part-nav .prev-slide',
			nextEl: '.part-nav .next-slide',
		},
		pagination: {
			el: '.part-pagination',
			dynamicBullets: true,
		},
		slidesPerView: 4,
		spaceBetween: 30,
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			560: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			920: {
				slidesPerView: 4,
				spaceBetween: 30,
			},
		},
	})

	const worksSlider = new Swiper('.works__slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			prevEl: '.works-nav .prev-slide',
			nextEl: '.works-nav .next-slide',
		},
		pagination: {
			el: '.works-pagination',
			dynamicBullets: true,
		},

		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 10,

			},
			560: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			920: {
				slidesPerView: 3,
				spaceBetween: 30,
			},
		}
	})

	const prodsSlider = new Swiper('.prods__items-one', {
		pagination: {
			el: '.prods__items-one-wrap .prods__pag'
		},
		navigation: {
			prevEl: 'prods__items-one-wrap .prods-prev',
			nextEl: 'prods__items-one-wrap .prods-next',
		},
		slidesPerView: 1,
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			450: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 30,
			}
		},
	});

	const prodsTwoSlider = new Swiper('.prods__items-two', {
		pagination: {
			el: '.prods__items-two-wrap .prods__pag'
		},
		navigation: {
			prevEl: '.prods__items-two-wrap .prods-prev',
			nextEl: '.prods__items-two-wrap .prods-next',
		},
		slidesPerView: 1,
		breakpoints: {
			0: {
				slidesPerView: 1,
				spaceBetween: 10,
			},
			450: {
				slidesPerView: 2,
				spaceBetween: 10,
			},
			768: {
				slidesPerView: 3,
				spaceBetween: 10,
			},
			1024: {
				slidesPerView: 3,
				spaceBetween: 30,
			}
		},
	});

	const certSlider = new Swiper('.certification__slider', {
		navigation: {
			prevEl: '.cert-nav .prev-slide',
			nextEl: '.cert-nav .next-slide',
		},
		pagination: {
			el: '.cert-pagination',
			dynamicBullets: true,
		},
		spaceBetween: 10,
		breakpoints: {
			0: {
				slidesPerView: 2,
			},
			560: {
				slidesPerView: 3,
			},
			768: {
				slidesPerView: 4,
			},
			920: {
				slidesPerView: 5,
			},
			1200: {
				slidesPerView: 6,
			},
		}
	})


	function DynamicAdapt(type) {
		this.type = type;
	}

	DynamicAdapt.prototype.init = function () {
		const _this = this;
		// массив объектов
		this.оbjects = [];
		this.daClassname = "_dynamic_adapt_";
		// массив DOM-элементов
		this.nodes = document.querySelectorAll("[data-da]");

		// наполнение оbjects объктами
		for (let i = 0; i < this.nodes.length; i++) {
			const node = this.nodes[i];
			const data = node.dataset.da.trim();
			const dataArray = data.split(",");
			const оbject = {};
			оbject.element = node;
			оbject.parent = node.parentNode;
			оbject.destination = document.querySelector(dataArray[0].trim());
			оbject.breakpoint = dataArray[1] ? dataArray[1].trim() : "767";
			оbject.place = dataArray[2] ? dataArray[2].trim() : "last";
			оbject.index = this.indexInParent(оbject.parent, оbject.element);
			this.оbjects.push(оbject);
		}

		this.arraySort(this.оbjects);

		// массив уникальных медиа-запросов
		this.mediaQueries = Array.prototype.map.call(this.оbjects, function (item) {
			return '(' + this.type + "-width: " + item.breakpoint + "px)," + item.breakpoint;
		}, this);
		this.mediaQueries = Array.prototype.filter.call(this.mediaQueries, function (item, index, self) {
			return Array.prototype.indexOf.call(self, item) === index;
		});

		// навешивание слушателя на медиа-запрос
		// и вызов обработчика при первом запуске
		for (let i = 0; i < this.mediaQueries.length; i++) {
			const media = this.mediaQueries[i];
			const mediaSplit = String.prototype.split.call(media, ',');
			const matchMedia = window.matchMedia(mediaSplit[0]);
			const mediaBreakpoint = mediaSplit[1];

			// массив объектов с подходящим брейкпоинтом
			const оbjectsFilter = Array.prototype.filter.call(this.оbjects, function (item) {
				return item.breakpoint === mediaBreakpoint;
			});
			matchMedia.addListener(function () {
				_this.mediaHandler(matchMedia, оbjectsFilter);
			});
			this.mediaHandler(matchMedia, оbjectsFilter);
		}
	};

	DynamicAdapt.prototype.mediaHandler = function (matchMedia, оbjects) {
		if (matchMedia.matches) {
			for (let i = 0; i < оbjects.length; i++) {
				const оbject = оbjects[i];
				оbject.index = this.indexInParent(оbject.parent, оbject.element);
				this.moveTo(оbject.place, оbject.element, оbject.destination);
			}
		} else {
			for (let i = 0; i < оbjects.length; i++) {
				const оbject = оbjects[i];
				if (оbject.element.classList.contains(this.daClassname)) {
					this.moveBack(оbject.parent, оbject.element, оbject.index);
				}
			}
		}
	};

	// Функция перемещения
	DynamicAdapt.prototype.moveTo = function (place, element, destination) {
		element.classList.add(this.daClassname);
		if (place === 'last' || place >= destination.children.length) {
			destination.insertAdjacentElement('beforeend', element);
			return;
		}
		if (place === 'first') {
			destination.insertAdjacentElement('afterbegin', element);
			return;
		}
		destination.children[place].insertAdjacentElement('beforebegin', element);
	}

	// Функция возврата
	DynamicAdapt.prototype.moveBack = function (parent, element, index) {
		element.classList.remove(this.daClassname);
		if (parent.children[index] !== undefined) {
			parent.children[index].insertAdjacentElement('beforebegin', element);
		} else {
			parent.insertAdjacentElement('beforeend', element);
		}
	}

	// Функция получения индекса внутри родителя
	DynamicAdapt.prototype.indexInParent = function (parent, element) {
		const array = Array.prototype.slice.call(parent.children);
		return Array.prototype.indexOf.call(array, element);
	};

	// Функция сортировки массива по breakpoint и place 
	// по возрастанию для this.type = min
	// по убыванию для this.type = max
	DynamicAdapt.prototype.arraySort = function (arr) {
		if (this.type === "min") {
			Array.prototype.sort.call(arr, function (a, b) {
				if (a.breakpoint === b.breakpoint) {
					if (a.place === b.place) {
						return 0;
					}

					if (a.place === "first" || b.place === "last") {
						return -1;
					}

					if (a.place === "last" || b.place === "first") {
						return 1;
					}

					return a.place - b.place;
				}

				return a.breakpoint - b.breakpoint;
			});
		} else {
			Array.prototype.sort.call(arr, function (a, b) {
				if (a.breakpoint === b.breakpoint) {
					if (a.place === b.place) {
						return 0;
					}

					if (a.place === "first" || b.place === "last") {
						return 1;
					}

					if (a.place === "last" || b.place === "first") {
						return -1;
					}

					return b.place - a.place;
				}

				return b.breakpoint - a.breakpoint;
			});
			return;
		}
	};

	const da = new DynamicAdapt("max");
	da.init();

});