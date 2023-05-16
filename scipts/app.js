document.addEventListener('DOMContentLoaded', ()=>{


	const faqItems = document.querySelectorAll('.accord-btn');

	if (faqItems.length != 0) {
		faqItems.forEach(function(item){
			item.addEventListener('click', (e)=>{
				let target = e.target;
				if (target.classList.contains('active')) {
					CloseFaq(target);
				} else {
					OpenFaq(target);
				}
			})
		})


		function OpenFaq(i) {
			faqItems.forEach(function(item){
				item.classList.remove('active');
				item.nextElementSibling.classList.remove('active');
			});
			i.classList.add('active');
			i.nextElementSibling.classList.add('active');
		}
		function CloseFaq(i) {
			faqItems.forEach(function(item){
				item.classList.remove('active');
				item.nextElementSibling.classList.remove('active');
			});
			i.classList.remove('active');
			i.nextElementSibling.classList.remove('active');
		}
	}

    const mainSlider = new Swiper('.hero__slider', {
        // options
		effect: 'fade',
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
			prevEl : '.review-nav .prev-slide',
			nextEl : '.review-nav .next-slide',
		},
		pagination: {
			el: '.review-pagination',
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
			prevEl : '.part-nav .prev-slide',
			nextEl : '.part-nav .next-slide',
		},
		pagination: {
			el: '.part-pagination',
		},
		slidesPerView: 4,
		spaceBetween: 30,
		breakpoints: {
			0: {
				slidesPerView: 1,
			},
			560: {
				slidesPerView: 2,
				spaceBetween:10,
			},
			768: {
				slidesPerView: 3,
				spaceBetween:10,
			},
			920: {
				slidesPerView: 4,
				spaceBetween:30,
			},
		},
	})

	const worksSlider = new Swiper('.works__slider', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			prevEl : '.works-nav .prev-slide',
			nextEl : '.works-nav .next-slide',
		},
		pagination: {
			el: '.works-pagination',
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
		breakpoints :{
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
		breakpoints :{
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
			el: '.cert-pagination'
		},
        spaceBetween: 10,
        breakpoints:{
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