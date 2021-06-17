FROM ubuntu

ENV TZ=Europe/London
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update && apt-get install -y \
	ikiwiki libtext-multimarkdown-perl libimage-magick-perl build-essential vim-tiny \
	&& rm -rf /var/lib/apt/lists/*

WORKDIR /home/jamie/geekout.org.uk

COPY . .

CMD ["/home/jamie/geekout.org.uk/build.sh"]
