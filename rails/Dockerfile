FROM ruby:2.7

ENV LANG=C.UTF-8 \
  TZ=Asia/Tokyo

WORKDIR /app
RUN curl https://deb.nodesource.com/setup_12.x | bash
RUN curl https://dl.yarnpkg.com/debian/pubkey.gpg | apt-key add -
RUN echo "deb https://dl.yarnpkg.com/debian/ stable main" | tee /etc/apt/sources.list.d/yarn.list
RUN apt-get update && apt-get install -y nodejs yarn postgresql-client
RUN apt-get update -qq && apt-get install -y nodejs default-mysql-client
COPY ./rails/Gemfile /app/Gemfile
COPY ./rails/Gemfile.lock /app/Gemfile.lock
RUN bundle install

# Start the main process.
CMD ["rails", "server", "-b", "0.0.0.0"]